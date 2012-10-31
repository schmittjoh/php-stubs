<?php

/*
 * Copyright 2012 Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace PHPStubs;

use Monolog\Handler\NullHandler;
use Monolog\Logger;
use CG\Generator\PhpConstant;
use CG\Generator\PhpMethod;
use CG\Generator\PhpClass;
use CG\Generator\PhpParameter;
use CG\Generator\PhpFunction;
use Symfony\Component\Finder\Finder;

/**
 * PHP Documentation Parser
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class DocumentationParser
{
    private static $entitySubstitutes = array(
        '#&Version;#' => '5.4',
        '#&([^;\.\s]+);#' => '\\1',
        '#([a-zA-Z]\s*)<classname>([^<]+)</classname>#' => '\\1``\\2``',
        '#([a-zA-Z]\s*)<type>([^<]+)</type>#' => '\\1``\\2``',
    );

    private static $undefinedEntities = array(
        '#&[^;\s]+\.[^;\s]+;#',
    );

    private $logger;
    private $typeRefiner;

    private $classes;
    private $functions;
    private $constants;
    private $file;

    public function __construct(Logger $logger = null, TypeRefiner $refiner = null)
    {
        if (null === $logger) {
            $logger = new Logger('documentation_parser');
            $logger->pushHandler(new NullHandler());
        }

        $this->logger = $logger;
        $this->typeRefiner = $refiner ?: new TypeRefiner($logger);
    }

    /**
     * Parses the raw XML documentation files.
     *
     * @param string $docPath path to the reference folder
     */
    public function parse($docPath)
    {
        if ( ! is_dir($docPath)) {
            throw new \InvalidArgumentException(sprintf('The directory "%s" does not exist.', $docPath));
        }

        $this->classes = $this->functions = $this->constants = array();
        foreach (Finder::create()->in($docPath)->name('*.xml') as $file) {
            assert($file instanceof \SplFileInfo);
            $this->file = $file;

            $content = file_get_contents($file->getRealPath());
            $content = preg_replace('#<refsect1 role="(?:examples|notes|seealso)">.*?</refsect1>#s', '', $content);
            $content = preg_replace(self::$undefinedEntities, '', $content);
            $content = preg_replace(array_keys(self::$entitySubstitutes), array_values(self::$entitySubstitutes), $content);

            if ('' === trim($content)) {
                continue;
            }

            $doc = simplexml_load_string($content);
            $doc->registerXPathNamespace('search', 'http://docbook.org/ns/docbook');
            if (isset($doc->refnamediv)) {
                // Ignore methods, we will parse them as part of the class.
                if (false !== strpos((string) $doc->refnamediv->refname, '::')) {
                    $this->parseMethod($doc);

                    continue;
                }

                $this->parseFunction($doc);

                continue;
            }

            $this->tryParsingClass($doc);
            $this->tryParsingConstant($doc);
        }

        foreach ($this->classes as $class) {
            $this->typeRefiner->refineClass($class);
        }

        $rs = array('classes' => $this->classes, 'functions' => $this->functions, 'constants' => $this->constants);
        $this->classes = $this->functions = $this->constants = null;

        return $rs;
    }

    private function tryParsingProperties(\SimpleXMLElement $doc, PhpClass $class)
    {
        foreach ($doc->xpath('//search:fieldsynopsis') as $fieldElem) {
            $type = (string) $fieldElem->type;
            $name = (string) $fieldElem->varname;

            $modifiers = array();
            foreach ($fieldElem->modifier as $modifierElem) {
                $modifiers[] = (string) $modifierElem;
            }

            if (in_array('const', $modifiers, true)) {
                if (false !== strpos($name, '::')) {
                    list(, $name) = explode('::', $name);
                }

                $constant = new PhpConstant($name);
                $class->setConstant($constant);

                $constant->setAttribute('type', $type);

                $initializer = $fieldElem->initializer;
                settype($initializer, $type);
                $constant->setValue($initializer);
            } else {
                $visibility = array_intersect(array('public', 'protected', 'private'), $modifiers);
                if ( ! $visibility) {
                    $visibility = array('public');
                }

                $property = new \CG\Generator\PhpProperty($name);
                $property->setVisibility(reset($visibility));
                if ('' !== $type) {
                    $property->setAttribute('type', $type);
                }
                $class->setProperty($property);

                $this->typeRefiner->refinePropertyType($class, $property);
            }
        }
    }

    private function tryParsingConstant(\SimpleXMLElement $doc)
    {
        foreach ($doc->xpath('//search:varlistentry') as $entryElem) {
            if ( ! isset($entryElem->term->constant)) {
                continue;
            }

            $name = (string) $entryElem->term->constant;
            if (false !== strpos($name, '::')) {
                list($className, $name) = explode('::', $name);
                $class = $this->getOrCreateClass($className);

                if ($class->hasConstant($name)) {
                    continue;
                }

                $constant = new PhpConstant($name);
                $class->setConstant($constant);

                continue;
            }

            $this->constants[$name] = $constant = new PhpConstant($name);
            $constant->setAttribute('type', (string) $entryElem->term->type);
            $constant->setAttribute('relative_path', $this->file->getRelativePathname());

            $this->typeRefiner->refineConstantType($constant);
        }
    }

    private function tryParsingClass(\SimpleXMLElement $doc)
    {
        if (isset($doc->title)) {
            foreach ($doc->xpath('//search:classsynopsisinfo') as $synopsisElem) {
                if ( ! isset($synopsisElem->ooclass)) {
                    continue;
                }

                $className = null;
                $abstract = $final = false;
                $extends = $implements = array();
                foreach ($synopsisElem as $childElem) {
                    if (isset($childElem->classname) && ! isset($childElem->modifier)) {
                        $className = (string) $childElem->classname;

                        continue;
                    }

                    if (isset($childElem->interfacename)) {
                        $implements[] = (string) $childElem->interfacename;

                        continue;
                    }

                    if (isset($childElem->modifier)) {
                        switch ((string) $childElem->modifier) {
                            case 'final':
                                $final = true;
                                break;

                            case 'abstract':
                                $abstract = true;
                                break;

                            case 'extends':
                                if ( ! isset($childElem->classname)) {
                                    throw new \RuntimeException('Extended class was not set.');
                                }

                                $extends[] = (string) $childElem->classname;
                                break;

                            case 'implements':
                                if ( ! isset($childElem->classname)) {
                                    throw new \RuntimeException('Implemented class was not set.');
                                }

                                $implements[] = (string) $childElem->classname;
                                break;

                            default:
                                throw new \RuntimeException(sprintf('Unknown modifier "%s".', (string) $childElem->modifier));
                        }

                        continue;
                    }
                }

                if (null === $className) {
                    continue;
                }

                $class = $this->getOrCreateClass($className);
                $class->setAttribute('relative_path', $this->file->getRelativePathname());

                if (false !== stripos((string) $doc->title, 'Interface')) {
                    // TODO: We should model an interface as a separate class, but that would require
                    //       some extra code.
                    $class->setAttribute('interface', true);
                    $class->setInterfaceNames($extends);
                } else {
                    $class->setInterfaceNames($implements);
                    $class->setAbstract($abstract);
                    $class->setFinal($final);

                    if ($extends) {
                        if (count($extends) > 1) {
                            throw new \RuntimeException(sprintf('A class cannot extend more than one class.'));
                        }

                        $class->setParentClassName(reset($extends));
                    }
                }

                $this->tryParsingProperties($doc, $class);
            }
        }
    }

    private function parseMethod(\SimpleXMLElement $doc)
    {
        list($className, $methodName) = explode("::", (string) $doc->refnamediv->refname);
        $class = $this->getOrCreateClass($className);
        $class->setMethod($method = new PhpMethod($methodName));
        $method->setAttribute('purpose', (string) $doc->refnamediv->refpurpose);

        foreach ($doc->refsect1 as $refsect) {
            if (isset($refsect->methodsynopsis)) {
                foreach ($doc->refsect1->methodsynopsis as $methodElem) {
                    $method->setAttribute('return_type', (string) $methodElem->type);

                    foreach ($methodElem->methodparam as $paramElem) {
                        $method->addParameter($this->createParamForElem($paramElem));

                        if ('...' === (string) $paramElem->parameter) {
                            $method->setAttribute('variable_parameters', true);
                        }
                    }
                }

                continue;
            }

            $this->parseRefsect($refsect, $method);
        }

        $this->typeRefiner->refineMethodTypes($class, $method);
    }

    private function parseFunction(\SimpleXMLElement $doc)
    {
        $function = new PhpFunction((string) $doc->refnamediv->refname);
        $function->setName((string) $doc->refnamediv->refname);
        $function->setAttribute('relative_path', $this->file->getRelativePathname());
        $function->setAttribute('purpose', trim((string) $doc->refnamediv->refpurpose));

        $functions = array();
        foreach ($doc->refsect1->methodsynopsis as $functionElem) {
            $cFunction = clone $function;
            $cFunction->setAttribute('return_type', (string) $functionElem->type);

            foreach ($functionElem->methodparam as $paramElem) {
                $cFunction->addParameter($this->createParamForElem($paramElem));

                if ('...' === (string) $paramElem->parameter) {
                    $cFunction->setAttribute('variable_parameters', true);
                }
            }

            $this->functions[] = $functions[] = $cFunction;
        }

        if (count($functions) === 1) {
            foreach ($doc->refsect1 as $refsect) {
                if (isset($refsect->methodsynopsis)) {
                    continue;
                }

                $this->parseRefsect($refsect, $functions[0]);
            }
        }

        foreach ($functions as $parsedFunction) {
            $this->typeRefiner->refineFunctionTypes($parsedFunction);
        }
    }

    private function parseRefsect(\SimpleXMLElement $refsect, $method)
    {
        assert($method instanceof PhpMethod || $method instanceof PhpFunction);

        switch ((string) $refsect->attributes()->role) {
            case 'returnvalues':
                if ( ! isset($refsect->para)) {
                    break;
                }

                $method->setAttribute('return_desc', $refsect->para);
                break;
        }
    }

    private function createParamForElem(\SimpleXMLElement $paramElem)
    {
        $name = trim((string) $paramElem->parameter);
        if ($name === '...') {
            $name = '_';
        }

        $param = PhpParameter::create($name);
        $param->setAttribute('type', $type = (string) $paramElem->type);

        if (isset($paramElem->initializer)) {
            $value = (string) $paramElem->initializer;

            if (strlen($value) > 0 && '"' === $value[0] && '"' === substr($value, -1)) {
                $value = substr($value, 1, -1);
            } else if ('integer' === $type || 'int' === $type) {
                $value = (integer) $value;
            } else if ('double' === $type || 'float' === $type) {
                $value = (double) $value;
            }

            $param->setDefaultValue($value);
        } else if ('opt' === (string) @$paramElem->attributes()->choice) {
            if ('array' === $type) {
                $param->setDefaultValue(array());
            } else {
                $param->setDefaultValue(null);
            }
        }

        return $param;
    }

    private function getOrCreateClass($name)
    {
        $loweredName = strtolower($name);

        if (isset($this->classes[$loweredName])) {
            return $this->classes[$loweredName];
        }

        return $this->classes[$loweredName] = new PhpClass($name);
    }
}
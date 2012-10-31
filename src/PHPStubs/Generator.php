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

use CG\Generator\PhpMethod;

use CG\Generator\DefaultNavigator;
use CG\Generator\PhpClass;

class Generator
{
    private $visitor;
    private $navigator;
    private $logger;

    public function __construct(\Monolog\Logger $logger = null)
    {
        if (null === $logger) {
            $logger = new \Monolog\Logger('generator');
            $logger->pushHandler(new \Monolog\Handler\NullHandler());
        }

        $this->logger = $logger;

        $this->visitor = new CodeElementVisitor();
        $this->navigator = new DefaultNavigator();
        $this->navigator->setMethodSortFunc(function(PhpMethod $a, PhpMethod $b) {
            return strcmp($a->getName(), $b->getName());
        });
    }

    public function generate($dir, array $classes, array $functions, array $constants)
    {
        if ( ! is_dir($dir) && false === @mkdir($dir, 0777, true)) {
            throw new \RuntimeException(sprintf('The directory "%s" does not exist, and could not be created.', $dir));
        }

        foreach ($classes as $class) {
            assert($class instanceof PhpClass);

            if ( ! $class->hasAttribute('relative_path')) {
                $this->logger->warn(sprintf("Class '%s' has not relative path set.", $class->getName()));
                continue;
            }

            $this->visitor->reset();
            $this->navigator->accept($this->visitor, $class);

            $targetPath = $dir.'/'.substr($class->getAttribute('relative_path'), 0, -3).'php';
            $this->writeFile($targetPath, "<?php\n\n".$this->visitor->getContent());
        }

        foreach ($this->groupElementsByFile($constants) as $file => $constantsInFile) {
            $content = "<?php\n\n";
            foreach ($constantsInFile as $constant) {
                assert($constant instanceof \CG\Generator\PhpConstant);

                $content .= 'define('.var_export($constant->getName(), true).', ';
                $content .= var_export($this->getConstantValue($constant), true);
                $content .= ");\n";
            }

            $this->writeFile($dir.'/'.$file, $content);
        }

        foreach ($this->groupElementsByFile($functions) as $file => $functionsInFile) {
            $content = "<?php";

            foreach ($functionsInFile as $function) {
                $content .= "\n\n";

                $this->visitor->reset();
                $this->visitor->visitFunction($function);

                $content .= $this->visitor->getContent();
            }

            $this->writeFile($dir.'/'.$file, $content);
        }
    }

    /**
     * Returns the value of a constant, or makes up an arbitrary value that
     * matches the type of the constant.
     *
     * The reasoning behind generating an arbitrary value is that for type
     * inference, the actual value is not important as long as we can infer the
     * correct type. For other types of data flow analysis it might be interesting
     * though; we can re-visit it then.
     *
     * @param \CG\Generator\PhpConstant $constant
     *
     * @return int|real|boolean|string|null
     */
    private function getConstantValue(\CG\Generator\PhpConstant $constant)
    {
        if (null !== $value = $constant->getValue()) {
            return $value;
        }

        if ($constant->hasAttribute('type')) {
            switch ($constant->getAttribute('type')) {
                case 'int':
                case 'integer':
                    return 0;

                case 'double':
                case 'float':
                    return 0.1;

                case 'bool':
                case 'boolean':
                    return true;

                case 'string':
                    return 'dummy';

                case 'int/float/bool/enum':
                case '':
                    return null;

                default:
                    throw new \RuntimeException(sprintf('Unknown constant type "%s".', $constant->getAttribute('type')));
            }
        }

        return null;
    }

    private function writeFile($path, $content)
    {
        $dir = dirname($path);
        if ( ! is_dir($dir) && false === @mkdir($dir, 0777, true)) {
            throw new \RuntimeException(sprintf('Could not create directory "%s".', $dir));
        }

        file_put_contents($path, $content);
    }

    private function groupElementsByFile(array $elements)
    {
        $elementFiles = array();
        foreach ($elements as $element) {
            assert($element instanceof \CG\Generator\AbstractBuilder);

            if ($element->hasAttribute('relative_path')) {
                $file = substr($element->getAttribute('relative_path'), 0, -3).'php';
            } else {
                if ($element instanceof \CG\Generator\PhpConstant) {
                    $file = 'constants.php';
                } else if ($element instanceof \CG\Generator\PhpFunction) {
                    $file = $element->getName().'.php';
                } else {
                    $file = 'elements.php';
                }
            }

            $elementFiles[$file][] = $element;
        }

        return $elementFiles;
    }
}
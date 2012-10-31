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

use CG\Generator\PhpClass;
use CG\Generator\PhpParameter;
use Monolog\Handler\NullHandler;
use Monolog\Logger;
use CG\Generator\PhpConstant;
use CG\Generator\PhpProperty;
use CG\Generator\PhpFunction;
use CG\Generator\PhpMethod;

/**
 * Type Refiner
 *
 * This class tries to refine documented types like "mixed", or "array".
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class TypeRefiner
{
    /**
     * Map of refined methods, functions, and properties.
     *
     * Keys must follow a specific format:
     *
     * - Methods: "ClassName::MethodName"
     * - Properties: "ClassName::$propertyName"
     * - Functions: "Fully\Qualified\Name"
     *
     * The general structure of this array can be created with the
     * "phpstubs extract-non-refined extensionName" command.
     */
    private static $refinedElements = array(
        // PCRE
        'preg_filter' => array(
            'return' => 'string[]|string',
            'param' => array(
                array('type' => 'string[]|string'),
                array('type' => 'string[]|string'),
                array('type' => 'string[]|string')),
        ),
        'preg_match_all' => array(
            'param' => array(2 => array('type' => 'string[]')),
        ),
        'preg_replace' => array(
            'return' => 'string[]|string',
            'param' => array(
                array('type' => 'string[]|string'),
                array('type' => 'string[]|string'),
                array('type' => 'string[]|string')),
        ),
        'preg_split' => array(
            'return' => 'array', // We cannot fix this one as it depends on the passed flags,
                                 // this can still be inferred by a custom interpreter.
        ),
        'preg_grep' => array(
            'return' => 'string[]',
            'param' => array(1 => array('type' => 'string[]')),
        ),
        'preg_replace_callback' => array(
            'return' => 'string[]|string',
            'param' => array(
                0 => array('type' => 'string[]|string'),
                2 => array('type' => 'string[]|string')),
        ),
        'preg_match' => array(
            'param' => array(2 => array('type' => 'string[]')),
        ),

        // Reflection
        'ReflectionExtension::getConstants' => array(
            'return' => 'array<string,scalar|null>',
        ),
        'ReflectionFunction::__construct' => array(
            'param' => array(array('type' => 'string|Closure')),
        ),
        'ReflectionMethod::invoke' => array(
            'param' => array(array('type' => 'object|null')),
        ),
        'ReflectionMethod::__construct' => array(
            'param' => array(array('type' => 'string|object')),
        ),
        'ReflectionMethod::invokeArgs' => array(
            'param' => array(array('type' => 'array')),
        ),
        'ReflectionProperty::setValue' => array(
            'param' => array(array('type' => 'object')),
        ),
        'ReflectionProperty::__construct' => array(
            'param' => array(array('type' => 'string|object')),
        ),
        'ReflectionParameter::getDefaultValue' => array(
            'return' => 'scalar|array|null',
        ),
        'Reflection::getModifierNames' => array(
            'return' => 'string[]',
        ),
        'ReflectionClass::getTraitAliases' => array(
            'return' => 'array<string,string>',
        ),
        'ReflectionClass::getStaticProperties' => array(
            'return' => 'array<string,scalar|array|null>',
        ),
        'ReflectionClass::getConstant' => array(
            'return' => 'scalar|null',
        ),
        'ReflectionClass::getMethods' => array(
            'return' => 'ReflectionMethod[]',
        ),
        'ReflectionClass::getStaticPropertyValue' => array(
            'return' => 'scalar|array|null',
        ),
        'ReflectionClass::getDefaultProperties' => array(
            'return' => 'array<string,scalar|array|null>',
        ),
        'ReflectionClass::getInterfaceNames' => array(
            'return' => 'string[]',
        ),
        'ReflectionClass::getConstants' => array(
            'return' => 'array<string,scalar|null>',
        ),
        'ReflectionClass::__construct' => array(
            'param' => array(array('type' => 'string|object')),
        ),
        'ReflectionClass::getTraits' => array(
            'return' => 'ReflectionClass[]',
        ),
        'ReflectionClass::getTraitNames' => array(
            'return' => 'string[]',
        ),
        'ReflectionFunctionAbstract::getStaticVariables' => array(
            'return' => 'string[]',
        ),
        'ReflectionFunctionAbstract::getParameters' => array(
            'return' => 'ReflectionParameter[]',
        ),

        // Contrary to what the documentation says, current() accepts anything, not
        // only references. It also does not modify the passed argument.
        'current' => array('param' => array(array('passed_by_ref' => false))),
        'microtime' => array('return' => 'string|float'),

        // The first argument to is_callable can be of any type, not only a callable.
        'is_callable' => array('param' => array(array('type' => 'mixed'))),
    );

    private static $typesEligibleForRefinement = array(null, 'mixed', 'array');

    private $logger;
    private $nonRefinedElements = array();

    public function __construct(Logger $logger = null)
    {
        if (null === $logger) {
            $logger = new Logger('type_refiner');
            $logger->pushHandler(new NullHandler());
        }

        $this->logger = $logger;
    }

    public function resetNonRefinedElements()
    {
        $this->nonRefinedElements = array();
    }

    public function getNonRefinedElements()
    {
        return $this->nonRefinedElements;
    }

    public function refineMethodTypes(PhpClass $class, PhpMethod $method)
    {
        $this->refineMethodOrFunction($class->getName().'::'.$method->getName(), $method);
    }

    public function refineFunctionTypes(PhpFunction $function)
    {
        $this->refineMethodOrFunction($function->getQualifiedName(), $function);
    }

    public function refinePropertyType(PhpClass $class, PhpProperty $property)
    {
        $name = $class->getName().'::'.$property->getName();

        if ( ! isset(self::$refinedElements[$name]['type'])) {
            if ($this->shouldBeRefined($propertyType = $property->getAttributeOrElse('type', null))) {
                $this->nonRefinedElements[$name]['type'] = $propertyType;
                $this->logger->info(sprintf('The property "%s" is not refined, and has type "%s".', $name, $propertyType));
            }
        } else {
            $property->setAttribute('type', self::$refinedElements[$name]['type']);
        }
    }

    public function refineConstantType(PhpConstant $constant)
    {
    }

    public function refineClass(PhpClass $class)
    {
        switch (strtolower($class->getName())) {
            case 'domnodelist':
                $class->addInterfaceName('Traversable');
                break;
        }
    }

    private function shouldBeRefined($typeName)
    {
        return in_array($typeName, self::$typesEligibleForRefinement, true);
    }

    private function refineMethodOrFunction($name, $codeElement)
    {
        assert($codeElement instanceof PhpMethod || $codeElement instanceof PhpFunction);

        // Return Type
        if ( ! isset(self::$refinedElements[$name]['return'])) {
            if ($this->shouldBeRefined($returnType = $codeElement->getAttributeOrElse('return_type', null))) {
                if ('array' === $returnType && null !== $inferredType = $this->inferArrayElementTypeFromDesc($codeElement->getAttributeOrElse('return_desc', null))) {
                    $codeElement->setAttribute('return_type', $inferredType);
                } else {
                    $this->nonRefinedElements[$name]['return'] = $returnType;
                    $this->logger->info(sprintf('Return type for "%s" is "%s" and is not refined.', $name, $returnType));
                }
            }
        } else {
            $codeElement->setAttribute('return_type', self::$refinedElements[$name]['return']);
        }

        // Parameter Types
        foreach ($codeElement->getParameters() as $i => $param) {
            assert($param instanceof PhpParameter);

            if ( ! isset(self::$refinedElements[$name]['param'][$i]['type'])) {
                if ($this->shouldBeRefined($paramType = $param->getAttributeOrElse('type', null))) {
                    $this->nonRefinedElements[$name]['param'][$i]['type'] = $paramType;
                    $this->logger->info(sprintf('Parameter "%s" of "%s" is not refined, and has type "%s".', $param->getName(), $name, $paramType));
                }
            } else {
                $param->setAttribute('type', self::$refinedElements[$name]['param'][$i]['type']);
            }

            if (isset(self::$refinedElements[$name]['param'][$i]['passed_by_ref'])) {
                $param->setPassedByReference(self::$refinedElements[$name]['param'][$i]['passed_by_ref']);
            }
        }
    }

    /**
     * Infers the element type of an array from the description.
     *
     * @param string $desc
     *
     * @return string|null
     */
    private function inferArrayElementTypeFromDesc($desc)
    {
        if (preg_match_all('#array\s+of\s+``([^`]+)``#', $desc, $matches)) {
            $types = array();
            foreach ($matches[1] as $m) {
                $types[] = $m.'[]';
            }

            return implode('|', $types);
        }

        return null;
    }
}
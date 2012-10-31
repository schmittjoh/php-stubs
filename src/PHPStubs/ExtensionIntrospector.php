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

use CG\Generator\PhpConstant;
use CG\Generator\PhpFunction;
use CG\Generator\PhpClass;

/**
 * Generates stubs from the loaded extension.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ExtensionIntrospector
{
    public function introspect(\ReflectionExtension $extension)
    {
        $classes = $functions = $constants = array();
        foreach ($extension->getClasses() as $class) {
            assert($class instanceof \ReflectionClass);

            $phpClass = PhpClass::fromReflection($class);
            $classes[] = $phpClass;
        }

        foreach ($extension->getFunctions() as $function) {
            assert($function instanceof \ReflectionFunction);

            $phpFunction = PhpFunction::fromReflection($function);
            $functions[] = $phpFunction;
        }

        foreach ($extension->getConstants() as $name => $value) {
            $phpConstant = new PhpConstant($name);
            $phpConstant->setValue($value);
            $constants[] = $phpConstant;
        }

        return array('classes' => $classes, 'functions' => $functions, 'constants' => $constants);
    }
}
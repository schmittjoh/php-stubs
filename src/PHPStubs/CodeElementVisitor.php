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
use CG\Generator\PhpClass;
use CG\Generator\DefaultVisitor;

class CodeElementVisitor extends DefaultVisitor
{
    private $firstProperty;

    public function startVisitingClass(PhpClass $class)
    {
        $class->setDocblock("/** @phpstub */\n");
        parent::startVisitingClass($class);
    }

    public function visitMethod(PhpMethod $method)
    {
        $method->setDocblock($this->createMethodDocblock($method));

        parent::visitMethod($method);
    }

    private function createMethodDocblock($method)
    {
        assert($method instanceof PhpMethod || $method instanceof \CG\Generator\PhpFunction);

        $doc = "/**\n"
              ." * ".$method->getAttribute('purpose')."\n";

        $annotations = array();

        if ($method->getAttributeOrElse('variable_parameters', false)) {
            $annotations[] = '@phpstub-variable-parameters';
        }

        if ($method instanceof \CG\Generator\PhpFunction) {
            $annotations[] = '@phpstub';
        }

        if ($annotations) {
            $doc .= " *\n";
            foreach ($annotations as $annotation) {
                $doc .= " * ".$annotation."\n";
            }
        }

        if ($method->getParameters()) {
            $doc .= " *\n";
            foreach ($method->getParameters() as $param) {
                $doc .= " * @param ".$param->getAttribute('type')." \$".$param->getName()."\n";
            }
        }

        if ($returnType = $method->getAttributeOrElse('return_type', null)) {
            $doc .= " *\n * @return ".$returnType;

            if ($returnDesc = $method->getAttributeOrElse('return_desc', null)) {
                $doc .= " ";
                $first = true;
                foreach (explode("\n", trim($returnDesc)) as $line) {
                    if ( ! $first) {
                        $doc .= " * ".str_repeat(' ', strlen('@return '.$returnType.' '));
                    }
                    $first = false;

                    $doc .= trim($line)."\n";
                }
            } else {
                $doc .= "\n";
            }
        }

        $doc .= " */\n";

        return $doc;
    }

    public function visitFunction(\CG\Generator\PhpFunction $function)
    {
        $function->setDocblock($this->createMethodDocblock($function));
        parent::visitFunction($function);
    }

    public function startVisitingProperties()
    {
        $this->firstProperty = true;

        parent::startVisitingProperties();
    }

    public function visitProperty(\CG\Generator\PhpProperty $property)
    {
        if ($type = $property->getAttributeOrElse('type', null)) {
            if ( ! $this->firstProperty) {
                $this->writer->writeln('');
            }

            $property->setDocblock('/** @var '.$type.' */'."\n");
        }
        $this->firstProperty = false;

        parent::visitProperty($property);
    }
}
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

class NonRefinedElementsDumper
{
    private $output;

    public function dump(array $nonRefinedElements)
    {
        $this->output = '';
        $this->output .= "Non Refined Elements\n";
        $this->output .= "--------------------\n\n";

        foreach ($nonRefinedElements as $k => $v) {
            $this->output .= var_export($k, true).' => array('."\n";

            foreach ($v as $subK => $subV) {
                $this->output .= '    '.var_export($subK, true).' => ';
                $this->dumpValue($subV);
                $this->output .= ",\n";
            }

            $this->output .= "),\n";
        }

        $output = $this->output;
        $this->output = null;

        return $output;
    }

    private function dumpValue($v) {
        if (is_array($v)) {
            $this->output .= 'array(';

            $first = true;
            $i = 0;
            $nonNumeric = false;
            foreach ($v as $k => $subV) {
                if ( ! $first) {
                    $this->output .= ', ';
                }
                $first = false;

                if ($i !== $k || $nonNumeric) {
                    $this->output .= var_export($k, true);
                    $this->output .= ' => ';
                    $nonNumeric = true;
                }

                $i+= 1;
                $this->dumpValue($subV);
            }
            $this->output .= ')';
        } else if (null === $v) {
            $this->output .= 'null';
        } else if (true === $v) {
            $this->output .= 'true';
        } else if (false === $v) {
            $this->output .= 'false';
        } else {
            $this->output .= var_export($v, true);
        }
    }
}
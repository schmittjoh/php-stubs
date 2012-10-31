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

namespace PHPStubs\Cli;

class OutputHandler extends \Monolog\Handler\AbstractHandler
{
    private $output;

    public function __construct(\Symfony\Component\Console\Output\OutputInterface $output)
    {
        $this->output = $output;
    }

    public function isHandling(array $record)
    {
        return true;
    }

    public function handle(array $record)
    {
        $this->output->writeln($record['message']);

        return false;
    }
}
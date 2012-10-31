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

use PHPStubs\TypeRefiner;
use Monolog\Logger;
use PHPStubs\Generator;
use PHPStubs\DocumentationParser;

class GenerateCommand extends \Symfony\Component\Console\Command\Command
{
    protected function configure()
    {
        $this
            ->setName('generate')
            ->setDescription('Generates stubs for the given directory')
            ->addArgument('directory', \Symfony\Component\Console\Input\InputArgument::OPTIONAL, 'The directory to scan.', __DIR__.'/../../../vendor/php/docs')
            ->addOption('output-dir', null, \Symfony\Component\Console\Input\InputOption::VALUE_REQUIRED, 'The directory to write stubs in.', __DIR__.'/../../../res/php')
        ;
    }

    protected function execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $logger = null;

        if ($input->getOption('verbose')) {
            $logger = new Logger('phpstubs');
            $logger->pushHandler(new OutputHandler($output));
        }

        $output->writeln(sprintf('Scanning directory "%s"...', $input->getArgument('directory')));
        $refiner = new TypeRefiner($logger);
        $parser = new DocumentationParser($logger, $refiner);
        $rs = $parser->parse($input->getArgument('directory'));

        $output->writeln(sprintf('Writing stubs in "%s".', $input->getOption('output-dir')));
        $generator = new Generator($logger);
        $generator->generate($input->getOption('output-dir'), $rs['classes'], $rs['functions'], $rs['constants']);

        if ($input->getOption('verbose')) {
            $nonRefinedElements = $refiner->getNonRefinedElements();
            if ($nonRefinedElements) {
                $dumper = new \PHPStubs\NonRefinedElementsDumper();
                $output->writeln($dumper->dump($nonRefinedElements));
            }
        }

        $output->writeln('Done.');
    }


}
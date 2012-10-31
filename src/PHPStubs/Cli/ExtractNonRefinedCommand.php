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

class ExtractNonRefinedCommand extends \Symfony\Component\Console\Command\Command
{
    protected function configure()
    {
        $this
            ->setName('extract-non-refined')
            ->setDescription('Extracts non-refined code elements in a format for the TypeRefiner.')
            ->addArgument('directory', \Symfony\Component\Console\Input\InputArgument::OPTIONAL, 'The directory to scan; you may also specify a path relative to vendor/php/docs.', __DIR__.'/../../../vendor/php/docs')
        ;
    }

    protected function execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $dir = $input->getArgument('directory');

        if ( ! is_dir($dir)) {
            $altDir = __DIR__.'/../../../vendor/php/docs/'.$dir;
            if ( ! is_dir($altDir)) {
                throw new \InvalidArgumentException(sprintf('The directory "%s" does not exist.', $dir));
            }

            $dir = $altDir;
        }

        $refiner = new \PHPStubs\TypeRefiner();
        $parser = new \PHPStubs\DocumentationParser(null, $refiner);
        $parser->parse($dir);

        if ( ! $refiner->getNonRefinedElements()) {
            $output->writeln('<info>There are no non-refined elements.</info>');

            return 0;
        }

        $dumper = new \PHPStubs\NonRefinedElementsDumper();
        $output->writeln($dumper->dump($refiner->getNonRefinedElements()));
    }
}
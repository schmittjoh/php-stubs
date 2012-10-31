<?php


if ( ! is_file(__DIR__.'/../vendor/autoload.php')) {
    echo 'Could not find "autoload.php". Did you run "composer install --dev"?'.PHP_EOL;
    exit(1);
}
require_once __DIR__.'/../vendor/autoload.php';

$app = new \Symfony\Component\Console\Application();
$app->add(new PHPStubs\Cli\GenerateCommand());
$app->add(new PHPStubs\Cli\ExtractNonRefinedCommand());
$app->run();


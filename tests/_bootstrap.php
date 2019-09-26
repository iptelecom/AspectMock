<?php

$loader = require(__DIR__.'/../vendor/autoload.php');
$loader->add('AspectMock', __DIR__ . '/../src');
$loader->add('demo', __DIR__ . '/_data');
$loader->register();

$kernel = \AspectMock\IpKernel::getInstance();
$kernel->init([
    'cacheDir' => __DIR__.'/_data/cache',
    'includePaths' => [__DIR__.'/_data/demo'],
    'interceptFunctions' => true
]);
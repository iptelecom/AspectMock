<?php
$loader = require_once(__DIR__.'/../../vendor/autoload.php');
$loader->add('AspectMock', __DIR__ . '/../../src');
$loader->add('demo', __DIR__ );
$loader->register();

$kernel = \AspectMock\IpKernel::getInstance();
$kernel->init([
    'debug' => true,
    'cacheDir' => __DIR__.'/cache',
]);

$user = new demo\UserModel;
$user->save();
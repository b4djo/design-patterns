<?php

// Autoloader classes
require __DIR__ . '/../../app/AutoLoader.php';
$autoloader = new \app\lib\AutoLoader();
$autoloader->addNamespace('DesignPatterns\\Structural\\DependencyInjection', realpath(__DIR__));
$autoloader->register();

$config = new \DesignPatterns\Structural\DependencyInjection\DatabaseConfiguration(
    'localhost',
    3306,
    'di',
    '12345'
);
$connection = new \DesignPatterns\Structural\DependencyInjection\DatabaseConnection($config);

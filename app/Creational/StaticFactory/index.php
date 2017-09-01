<?php

// Autoloader classes
require __DIR__ . '/../../app/AutoLoader.php';
$autoloader = new \app\lib\AutoLoader();
$autoloader->addNamespace('DesignPatterns\\Creational\\StaticFactory', realpath(__DIR__));
$autoloader->register();

$mazda3 = \DesignPatterns\Creational\StaticFactory\StaticFactory::factory('Mazda3');
$mazda3->setColor('yellow');

$mazda3 = \DesignPatterns\Creational\StaticFactory\StaticFactory::factory('Corolla');
$mazda3->setColor('black');
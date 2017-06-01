<?php

// Autoloader classes
require __DIR__ . '/../../app/AutoLoader.php';
$autoloader = new \app\lib\AutoLoader();
$autoloader->addNamespace('DesignPatterns\\Creational\\FactoryMethod', realpath(__DIR__));
$autoloader->register();

$mazdaFactory = new \DesignPatterns\Creational\FactoryMethod\JapanFactory();
$carCabriolet = $mazdaFactory->create(\DesignPatterns\Creational\FactoryMethod\FactoryMethod::CABRIOLET);

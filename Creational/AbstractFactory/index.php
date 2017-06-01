<?php

// Autoloader classes
require __DIR__ . '/../../app/AutoLoader.php';
$autoloader = new \app\lib\AutoLoader();
$autoloader->addNamespace('DesignPatterns\\Creational\\AbstractFactory', realpath(__DIR__));
$autoloader->register();

$mazdaFactory = new \DesignPatterns\Creational\AbstractFactory\MazdaFactory();
$toyotaFactory = new \DesignPatterns\Creational\AbstractFactory\ToyotaFactory();

$mazda3Car1 = $mazdaFactory->makeCar('DesignPatterns\Creational\AbstractFactory\Mazda3');
$mazda3Car1->setColor('White');

$mazda3Car2 = $mazdaFactory->makeCar('DesignPatterns\Creational\AbstractFactory\Mazda3');
$mazda3Car2->setColor('Black');

$mazda3Car3 = $mazdaFactory->makeCar('DesignPatterns\Creational\AbstractFactory\Mazda3');
$mazda3Car3->setColor('Blue');

$corollaCar1 = $toyotaFactory->makeCar('DesignPatterns\Creational\AbstractFactory\Corolla');
$corollaCar1->setColor("Black");
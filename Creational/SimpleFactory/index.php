<?php
// http://i-novice.net/shablon-proektirovaniya-fabrika/
// https://habrahabr.ru/sandbox/19322/

// Autoloader classes
require __DIR__ . '/../../app/AutoLoader.php';
$autoloader = new \app\lib\AutoLoader();
$autoloader->addNamespace('DesignPatterns\\Creational\\SimpleFactory', realpath(__DIR__));
$autoloader->register();

$carFactory = new \DesignPatterns\Creational\SimpleFactory\CarFactory();
$car = $carFactory->createCar('DesignPatterns\Creational\SimpleFactory\Mazda3');
$car->buildEngine();
$car->attachWheels();
$car->testDrive();
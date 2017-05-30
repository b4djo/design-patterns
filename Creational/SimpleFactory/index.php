<?php
//http://i-novice.net/shablon-proektirovaniya-fabrika/
require_once __DIR__ . '/CarFactory.php';
require_once __DIR__ . '/Car.php';
require_once __DIR__ . '/Mazda3.php';

$carFactory = new \DesignPatterns\Creational\SimpleFactory\CarFactory();
$car = $carFactory->createCar('Mazda3');

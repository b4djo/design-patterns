<?php

// Autoloader classes
require __DIR__ . '/../../app/AutoLoader.php';
$autoloader = new \app\lib\AutoLoader();
$autoloader->addNamespace('DesignPatterns\\Creational\\Builder', realpath(__DIR__));
$autoloader->register();

$carBuilder = new \DesignPatterns\Creational\Builder\CarBuilder();
$newVehicle = (new \DesignPatterns\Creational\Builder\Director())->build($carBuilder);

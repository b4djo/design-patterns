<?php

// Autoloader classes
require __DIR__ . '/../../app/AutoLoader.php';
$autoloader = new \app\lib\AutoLoader();
$autoloader->addNamespace('DesignPatterns\\Structural\\Adapter', realpath(__DIR__));
$autoloader->register();

$vehicle = new \DesignPatterns\Structural\Adapter\Vehicle();
$vehicle->refuel();
$vehicle->refuel();
$vehicle->refuel();
$vehicle->getLiters();

$eVehicle = new \DesignPatterns\Structural\Adapter\EVehicle();
$vehicle = new \DesignPatterns\Structural\Adapter\EVehicleAdapter($eVehicle);

$vehicle->refuel();
$vehicle->refuel();
$vehicle->getLiters();

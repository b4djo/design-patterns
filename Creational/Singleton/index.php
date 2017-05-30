<?php
// Autoloader classes
require __DIR__ . '/../../app/AutoLoader.php';
$autoloader = new \app\lib\AutoLoader();
$autoloader->addNamespace('DesignPatterns\\Creational\\Singleton', realpath(__DIR__));
$autoloader->register();

$singleton = \DesignPatterns\Creational\Singleton\Singleton::getInstance();

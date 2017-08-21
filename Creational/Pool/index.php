<?php

// Autoloader classes
require __DIR__ . '/../../app/AutoLoader.php';
$autoloader = new \app\lib\AutoLoader();
$autoloader->addNamespace('DesignPatterns\\Creational\\Pool', realpath(__DIR__));
$autoloader->register();

$pool = new \DesignPatterns\Creational\Pool\ObjectPool();
$product1 = $pool->get();
$pool->push($product1);

$product2 = $pool->get();

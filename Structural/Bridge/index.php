<?php

// Autoloader classes
require __DIR__ . '/../../app/AutoLoader.php';
$autoloader = new \app\lib\AutoLoader();
$autoloader->addNamespace('DesignPatterns\\Structural\\Bridge', realpath(__DIR__));
$autoloader->register();

$service = new \DesignPatterns\Structural\Bridge\HelloWordService(
    new \DesignPatterns\Structural\Bridge\PlainTextFormatter()
);
$service->get();

$service = new \DesignPatterns\Structural\Bridge\HelloWordService(
    new \DesignPatterns\Structural\Bridge\JsonFormatter()
);
$service->get();

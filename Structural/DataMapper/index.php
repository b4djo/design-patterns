<?php

// Autoloader classes
require __DIR__ . '/../../app/AutoLoader.php';
$autoloader = new \app\lib\AutoLoader();
$autoloader->addNamespace('DesignPatterns\\Structural\\DataMapper', realpath(__DIR__));
$autoloader->register();

$storage = new \DesignPatterns\Structural\DataMapper\StorageAdapter([
    1 => [
        'username'  => 'asad',
        'email'     => 'testmail@gmail.com',
    ]
]);
$mapper = new \DesignPatterns\Structural\DataMapper\UserMapper($storage);
$user = $mapper->findById(1);

$storage = new \DesignPatterns\Structural\DataMapper\StorageAdapter([]);
$mapper = new \DesignPatterns\Structural\DataMapper\UserMapper($storage);

$user = $mapper->findById(1); // Exception

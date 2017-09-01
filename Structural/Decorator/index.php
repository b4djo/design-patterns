<?php

// Autoloader classes
require __DIR__ . '/../../app/AutoLoader.php';
$autoloader = new \app\lib\AutoLoader();
$autoloader->addNamespace('DesignPatterns\\Structural\\Decorator', realpath(__DIR__));
$autoloader->register();

$eMail = new \DesignPatterns\Structural\Decorator\EMail();
$eMail->loadBody();

$eMail = new \DesignPatterns\Structural\Decorator\EMail();
$eMail = new \DesignPatterns\Structural\Decorator\ChristmasEMail($eMail);
$eMail->loadBody();

$eMail = new \DesignPatterns\Structural\Decorator\EMail();
$eMail = new \DesignPatterns\Structural\Decorator\NewYearEMail($eMail);
$eMail->loadBody();

// Combo
$eMail = new \DesignPatterns\Structural\Decorator\EMail();
$eMail = new \DesignPatterns\Structural\Decorator\ChristmasEMail($eMail);
$eMail = new \DesignPatterns\Structural\Decorator\NewYearEMail($eMail);
$eMail->loadBody();

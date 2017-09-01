<?php

// Autoloader classes
require __DIR__ . '/../../app/AutoLoader.php';
$autoloader = new \app\lib\AutoLoader();
$autoloader->addNamespace('DesignPatterns\\Structural\\Composite', realpath(__DIR__));
$autoloader->register();

$form = new \DesignPatterns\Structural\Composite\Form();
$select = new \DesignPatterns\Structural\Composite\SelectElement();

$select->addOption(new \DesignPatterns\Structural\Composite\OptionElement(1, 'One'));
$select->addOption(new \DesignPatterns\Structural\Composite\OptionElement(2, 'Two'));
$select->addOption(new \DesignPatterns\Structural\Composite\OptionElement(3, 'Three'));

$form->addElement($select);
$form->render();

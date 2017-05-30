<?php

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Class Model
 * @package DesignPatterns\Creational\AbstractFactory
 */
abstract class Mazda3
{
    private $model;

    public function __construct(string $model)
    {
        $this->model = $model;
    }
}
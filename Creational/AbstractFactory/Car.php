<?php

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Class Model
 * @package DesignPatterns\Creational\AbstractFactory
 */
abstract class Car
{
    private $modelName;
    private $color;
    private $gasoline;

    public function __construct(string $model)
    {
        $this->model = $model;
    }
}
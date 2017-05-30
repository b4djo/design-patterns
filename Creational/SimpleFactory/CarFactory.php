<?php
/**
 * Фабрика автомобилей
 */

namespace DesignPatterns\Creational\SimpleFactory;

/**
 * Class CarFactory
 * @package DesignPatterns\Creational\AbstractFactory
 */
class CarFactory
{
    public function createCar($model)
    {
        return new $model();
    }
}
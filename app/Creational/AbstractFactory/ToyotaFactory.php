<?php
/**
 * Конкретная фабрика для автомобилей марки "Toyota"
 */

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Class ToyotaFactory
 * @package DesignPatterns\Creational\AbstractFactory
 */
class ToyotaFactory extends AbstractFactory
{
    /**
     * Покрасить автомобиль
     * @param string $model
     * @return Car
     */
    public function makeCar(string $model): Car
    {
        return new $model();
    }
}
<?php
/**
 * Конкретная фабрика для автомобилей марки "Mazda"
 */

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Class MazdaFactory
 * @package DesignPatterns\Creational\AbstractFactory
 */
class MazdaFactory extends AbstractFactory
{
    /**
     * Произвести автомобиль
     * @param string $model
     * @return Car|false
     */
    public function makeCar(string $model): Car
    {
        return new $model();
    }
}

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
     * Название модели
     * @var string
     */
    private $name = 'Mazda';

    /**
     * Создание автомобиля "Mazda 3"
     * @param string $model
     * @return Mazda3
     */
    public function createMazda3(string $model): Mazda3
    {
        return new $this($model);
    }

    /**
     * @param string $model
     * @return Mazda6
     */
    public function createMazda6(string $model): Mazda6
    {
        return new $this($model);
    }
}
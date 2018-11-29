<?php
/**
 * Design pattern: Abstract Factory
 * Производство автомобилей
 * @see http://dron.by/post/pattern-proektirovaniya-abstract-factory-abstraktnaya-fabrika-na-php.html
 */

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Class AbstractFactory
 * @package DesignPatterns\Creational\AbstractFactory
 */
abstract class AbstractFactory
{
    /**
     * Произвести автомобиль
     * @param string $model
     * @return Car
     */
    abstract public function makeCar(string $model): Car;
}

<?php
/**
 * http://dron.by/post/pattern-proektirovaniya-factory-method-fabrichnyj-metod-na-php.html
 */

namespace DesignPatterns\Creational\FactoryMethod;

/**
 * Interface VehicleInterface
 * @package DesignPatterns\Creational\FactoryMethod
 */
interface VehicleInterface
{
    /**
     * Цвет автомобиля
     * @param string $color
     * @return mixed
     */
    public function setColor(string $color);
}
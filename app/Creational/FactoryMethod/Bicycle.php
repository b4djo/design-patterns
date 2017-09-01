<?php

namespace DesignPatterns\Creational\FactoryMethod;

/**
 * Class Bicycle
 * @package DesignPatterns\Creational\FactoryMethod
 */
class Bicycle implements VehicleInterface
{
    /**
     * @var
     */
    private $color;

    /**
     * Цвет автомобиля
     * @param string $color
     * @return mixed
     */
    public function setColor(string $color)
    {
        $this->color = $color;
    }
}
<?php

namespace DesignPatterns\Creational\FactoryMethod;

/**
 * Class CarToyota
 * @package DesignPatterns\Creational\FactoryMethod
 */
class CarToyota implements VehicleInterface
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
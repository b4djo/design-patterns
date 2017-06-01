<?php

namespace DesignPatterns\Creational\FactoryMethod;

/**
 * Class CarMazda
 * @package DesignPatterns\Creational\FactoryMethod
 */
class CarMazda implements VehicleInterface
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

    public function addMVTunign()
    {
    }
}
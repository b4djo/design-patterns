<?php

namespace DesignPatterns\Creational\Prototype;

/**
 * Class CarVehiclePrototype
 * @package DesignPatterns\Creational\Prototype
 */
class CarVehiclePrototype extends VehiclePrototype
{
    /**
     * @var string
     */
    protected $type = 'Car';

    public function __clone()
    {
    }
}

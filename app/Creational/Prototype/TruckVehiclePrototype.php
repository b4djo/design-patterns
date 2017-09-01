<?php

namespace DesignPatterns\Creational\Prototype;

/**
 * Class TruckVehiclePrototype
 * @package DesignPatterns\Creational\Prototype
 */
class TruckVehiclePrototype extends VehiclePrototype
{
    /**
     * @var string
     */
    protected $type = 'Truck';

    public function __clone()
    {
    }
}

<?php

namespace DesignPatterns\Creational\FactoryMethod;

/**
 * Class FactoryMethod
 * @package DesignPatterns\Creational\FactoryMethod
 */
abstract class FactoryMethod
{
    const SEDAN     = 'Sedan';
    const CABRIOLET = 'Cabriolet';

    /**
     * @param string $type
     * @return VehicleInterface
     */
    abstract protected function createVehicle(string $type): VehicleInterface;

    /**
     * @param string $type
     * @return VehicleInterface
     */
    public function create(string $type): VehicleInterface
    {
        $obj = $this->createVehicle($type);
        $obj->setColor('black');

        return $obj;
    }
}
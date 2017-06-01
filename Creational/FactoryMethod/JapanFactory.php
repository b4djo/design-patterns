<?php

namespace DesignPatterns\Creational\FactoryMethod;

/**
 * Class JapanFactory
 * @package DesignPatterns\Creational\FactoryMethod
 */
class JapanFactory extends FactoryMethod
{
    /**
     * @param string $type
     * @return VehicleInterface
     */
    protected function createVehicle(string $type): VehicleInterface
    {
        switch ($type) {
            case parent::SEDAN:
                return new CarMazda();
            case parent::CABRIOLET:
                return new CarToyota();
            default:
        }
    }
}
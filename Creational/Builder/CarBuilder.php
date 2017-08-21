<?php

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Vehicle;

/**
 * Class CarBuilder
 * @package DesignPatterns\Creational\Builder
 */
class CarBuilder implements BuilderInterface
{
    /**
     * @var
     */
    private $car;

    /**
     * Added wheels
     * @return mixed
     */
    public function addWheels()
    {
        $this->car->setPart('wheel1', new Parts\Wheel());
        $this->car->setPart('wheel2', new Parts\Wheel());
        $this->car->setPart('wheel3', new Parts\Wheel());
        $this->car->setPart('wheel4', new Parts\Wheel());
    }

    public function addEngine()
    {
        $this->car->setPart('carEngine', new Parts\Engine());
    }

    /**
     * Added doors
     * @return mixed
     */
    public function addDoors()
    {
        $this->car->setPart('rightDoor', new Parts\Door());
        $this->car->setPart('leftDoor', new Parts\Door());
        $this->car->setPart('trunkLid', new Parts\Door());
    }

    /**
     * Creating vehicle
     * @return mixed
     */
    public function createVehicle()
    {
        $this->car = new Parts\Car();
    }

    /**
     * Getting vehicle
     * @return Vehicle
     */
    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}

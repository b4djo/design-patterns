<?php

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Truck;
use DesignPatterns\Creational\Builder\Parts\Vehicle;

/**
 * Class TruckBuilder
 * @package DesignPatterns\Creational\Builder
 */
class TruckBuilder implements BuilderInterface
{
    /**
     * @var
     */
    private $truck;

    /**
     * Added wheels
     * @return mixed
     */
    public function addWheels()
    {
        $this->truck->setPart('wheel1', new Parts\Wheel());
        $this->truck->setPart('wheel2', new Parts\Wheel());
        $this->truck->setPart('wheel3', new Parts\Wheel());
        $this->truck->setPart('wheel4', new Parts\Wheel());
        $this->truck->setPart('wheel5', new Parts\Wheel());
        $this->truck->setPart('wheel6', new Parts\Wheel());
        $this->truck->setPart('wheel7', new Parts\Wheel());
        $this->truck->setPart('wheel8', new Parts\Wheel());
    }

    /**
     * Added engine
     * @return mixed
     */
    public function addEngine()
    {
        $this->truck->setPart('truckEngine', new Parts\Engine());
    }

    /**
     * Added doors
     * @return mixed
     */
    public function addDoors()
    {
        $this->truck->setPart('rightDoor', new Parts\Door());
        $this->truck->setPart('leftDoor', new Parts\Door());
    }

    /**
     * Creating vehicle
     * @return mixed
     */
    public function createVehicle()
    {
        $this->truck = new Truck();
    }

    /**
     * Getting vehicle
     * @return Vehicle
     */
    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}

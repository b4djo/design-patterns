<?php

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Vehicle;

/**
 * Interface BuilderInterface
 * @package DesignPatterns\Creational\Builder
 */
interface BuilderInterface
{
    /**
     * Added wheels
     * @return mixed
     */
    public function addWheels();

    /**
     * Added engine
     * @return mixed
     */
    public function addEngine();

    /**
     * Added doors
     * @return mixed
     */
    public function addDoors();

    /**
     * Creating vehicle
     * @return mixed
     */
    public function createVehicle();

    /**
     * Getting vehicle
     * @return Vehicle
     */
    public function getVehicle(): Vehicle;
}

<?php

namespace DesignPatterns\Creational\Builder;


use DesignPatterns\Creational\Builder\Parts\Vehicle;

interface BuilderInterface
{
    public function addWheels();

    public function addEngine();

    public function addDoors();

    public function createVehicle();

    public function getVehicle(): Vehicle;

}

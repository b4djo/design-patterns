<?php

namespace DesignPatterns\Structural\Adapter;

/**
 * Class Vehicle
 * @package DesignPatterns\Structural\Adapter
 */
class Vehicle implements VehicleInterface
{
    /**
     * @var int
     */
    private $liter = 0;

    public function refuel()
    {
        $this->liter++;
    }

    /**
     * @return int
     */
    public function getLiters()
    {
        return $this->liter;
    }
}

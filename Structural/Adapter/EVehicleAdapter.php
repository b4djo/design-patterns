<?php

namespace DesignPatterns\Structural\Adapter;

/**
 * Class EVehicleAdapter
 * @package DesignPatterns\Structural\Adapter
 */
class EVehicleAdapter implements VehicleInterface
{
    protected $eVehicle;

    public function __construct(EVehicleInterface $eVehicle)
    {
        $this->eVehicle = $eVehicle;
    }

    public function refuel()
    {
        $this->eVehicle->charge();
    }

    /**
     * @return int
     */
    public function getLiters()
    {
        return $this->eVehicle->getCharge();
    }
}

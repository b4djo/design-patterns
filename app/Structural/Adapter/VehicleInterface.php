<?php

namespace DesignPatterns\Structural\Adapter;

/**
 * Interface VehicleInterface
 * @package DesignPatterns\Structural\Adapter
 */
interface VehicleInterface
{
    public function refuel();

    /**
     * @return int
     */
    public function getLiters();
}

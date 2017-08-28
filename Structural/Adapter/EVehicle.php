<?php

namespace DesignPatterns\Structural\Adapter;

/**
 * Class EVehicle
 * @package DesignPatterns\Structural\Adapter
 */
class EVehicle implements EVehicleInterface
{
    /**
     * @var int
     */
    private $capacity = 0;

    public function charge()
    {
        $this->capacity++;
    }

    public function getCharge()
    {
        return $this->capacity;
    }
}

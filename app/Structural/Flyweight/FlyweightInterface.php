<?php

namespace DesignPatterns\Structural\Flyweight;

/**
 * Interface FlyweightInterface
 * @package DesignPatterns\app\Structural\Flyweight
 */
interface FlyweightInterface
{
    /**
     * External state (context) transmitted in flyweight
     *
     * @param string $extrinsicState
     * @return mixed
     */
    public function render(string $extrinsicState);
}

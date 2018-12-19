<?php

namespace DesignPatterns\Behavioral\Strategy\example1;

/**
 * Interface WeaponBehavior
 * @package DesignPatterns\Behavioral\Strategy\example1
 */
interface WeaponBehavior
{
    /**
     * @return int
     */
    public function damage(): int;
}

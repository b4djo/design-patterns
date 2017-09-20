<?php

namespace DesignPatterns\Behavioral\Strategy\example1;

/**
 * Class Sword
 * @package DesignPatterns\Behavioral\Strategy\example1
 */
class Sword implements WeaponBehavior
{
    /**
     * @return int
     */
    public function damage()
    {
        return 250;
    }
}

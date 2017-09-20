<?php

namespace DesignPatterns\Behavioral\Strategy\example1;

/**
 * Class Axe
 * @package DesignPatterns\Behavioral\Strategy\example1
 */
class Axe implements WeaponBehavior
{
    /**
     * @return int
     */
    public function damage()/*: int*/
    {
        return 1000;
    }
}

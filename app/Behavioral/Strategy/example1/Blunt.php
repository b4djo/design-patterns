<?php

namespace DesignPatterns\Behavioral\Strategy\example1;

/**
 * Class Blunt
 * @package DesignPatterns\Behavioral\Strategy\example1
 */
class Blunt implements WeaponBehavior
{
    /**
     * @return int
     */
    public function damage()/*: int*/
    {
        return 500;
    }
}

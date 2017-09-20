<?php

namespace DesignPatterns\Behavioral\Strategy\example1;

use Exception;

/**
 * Class AbstractCharacter
 * @package DesignPatterns\Behavioral\Strategy\example1
 */
abstract class AbstractCharacter
{
    protected $weapon;

    abstract public function talk();

    /**
     * @param WeaponBehavior $weapon
     */
    public function setWeapon(WeaponBehavior $weapon)
    {
        $this->weapon = $weapon;
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function attack()
    {
        if (isset($this->weapon)) {
            return $this->weapon->damage();
        } else {
            throw new \Exception('You must use setWeapon() function');
        }
    }
}

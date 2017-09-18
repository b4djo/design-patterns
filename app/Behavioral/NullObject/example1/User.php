<?php

namespace DesignPatterns\Behavioral\NullObject\example1;

use InvalidArgumentException;

/**
 * Class User
 * @package DesignPatterns\Behavioral\NullObject\example1
 */
class User extends AbstractUser
{
    /**
     * User constructor.
     *
     * @param $name
     */
    public function __construct($name)
    {
        $this->setName($name);
    }

    /**
     * @param $name
     *
     * @return $this
     */
    public function setName($name)
    {
        if (strlen($name) < 2 || strlen($name) > 30) {
            throw new InvalidArgumentException("The user name is invalid.");
        }
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return bool
     */
    public function isNull()
    {
        return false;
    }
}

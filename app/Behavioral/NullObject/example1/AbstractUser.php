<?php

namespace DesignPatterns\Behavioral\NullObject\example1;

/**
 * Class AbstractUser
 * @package DesignPatterns\Behavioral\NullObject\example1
 */
abstract class AbstractUser
{
    protected $name;
    
    abstract public function isNull();
    abstract public function getName();
}

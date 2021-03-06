<?php

namespace DesignPatterns\Creational\Builder\Parts;

/**
 * Class Vehicle
 * @package DesignPatterns\Creational\Builder\Parts
 */
abstract class Vehicle
{
    /**
     * @var array
     */
    private $data = [];

    /**
     * @param string $key
     * @param object $value
     */
    public function setPart($key, $value)
    {
        $this->data[$key] = $value;
    }
}

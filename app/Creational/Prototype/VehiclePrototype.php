<?php

namespace DesignPatterns\Creational\Prototype;

/**
 * Class ProductPrototype
 * @package DesignPatterns\Creational\Prototype
 */
abstract class VehiclePrototype
{
    /**
     * @var
     */
    private $model;

    /**
     * @var
     */
    private $type;

    abstract public function __clone();

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }
}

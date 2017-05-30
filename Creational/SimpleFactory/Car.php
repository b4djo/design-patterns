<?php

namespace DesignPatterns\Creational\SimpleFactory;

/**
 * Class Car
 * @package DesignPatterns\Creational\AbstractFactory
 */
abstract class Car
{
    /**
     * @var string
     */
    private $model;

    /**
     * @var
     */
    private $color;

    /**
     * @var
     */
    private $gasoline;

    /**
     * @var bool
     */
    private $testDrive = false;

    /**
     * Car constructor.
     * @param string $model
     * @param string $color
     * @param string $gasoline
     */
    public function __construct(/*string $model, string $color, string $gasoline*/)
    {
        /*$this->model = $model;
        $this->color = $color;
        $this->gasoline = $gasoline;*/
    }

    /**
     * @param string $destination Пункт назначения
     */
    public function driveTo(string $destination)
    {
    }
}

<?php

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Class Model
 * @package DesignPatterns\Creational\AbstractFactory
 */
abstract class Car
{
    /**
     * @var string
     */
    private $model;

    /**
     * @var string
     */
    private $color;

    /**
     * @var string
     */
    private $gasoline;

    /**
     * Покраска автомобиля
     * @param $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }
}
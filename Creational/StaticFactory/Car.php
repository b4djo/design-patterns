<?php

namespace DesignPatterns\Creational\StaticFactory;

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

    public function getColor()
    {
        return $this->color;
    }
}
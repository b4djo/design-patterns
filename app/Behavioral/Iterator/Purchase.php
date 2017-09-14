<?php

namespace DesignPatterns\Behavioral\Iterator;

/**
 * Class Purchase
 * @package DesignPatterns\Behavioral\Iterator
 */
class Purchase
{
    /**
     * @var int
     */
    private $cost;

    /**
     * Purchase constructor.
     *
     * @param $cost
     */
    public function __construct($cost)
    {
        $this->cost = $cost;
    }

    /**
     * @return int
     */
    public function getCost()
    {
        return $this->cost;
    }
}

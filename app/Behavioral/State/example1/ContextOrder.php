<?php

namespace DesignPatterns\Behavioral\State\example1;

/**
 * Class ContextOrder
 * @package DesignPatterns\Behavioral\State\example1
 */
class ContextOrder extends StateOrder
{
    /**
     * @return StateOrder
     */
    public function getState()/*:StateOrder*/
    {
        return static::$state;
    }

    /**
     * @param StateOrder $state
     */
    public function setState(StateOrder $state)
    {
        static::$state = $state;
    }

    public function done()
    {
        static::$state->done();
    }

    /**
     * @return string
     */
    public function getStatus()/*: string*/
    {
        return static::$state->getStatus();
    }
}

<?php

namespace DesignPatterns\Behavioral\State\example1;

/**
 * Class CreateOrder
 * @package DesignPatterns\Behavioral\State\example1
 */
class CreateOrder extends StateOrder
{
    /**
     * CreateOrder constructor.
     */
    public function __construct()
    {
        $this->setStatus('created');
    }

    protected function done()
    {
        static::$state = new ShippingOrder();
    }
}

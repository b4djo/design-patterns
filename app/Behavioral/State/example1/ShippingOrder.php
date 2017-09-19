<?php

namespace DesignPatterns\Behavioral\State\example1;

/**
 * Class ShippingOrder
 * @package DesignPatterns\Behavioral\State\example1
 */
class ShippingOrder extends StateOrder
{
    /**
     * ShippingOrder constructor.
     */
    public function __construct()
    {
        $this->setStatus('shipping');
    }

    protected function done()
    {
        $this->setStatus('completed');
    }
}

<?php

namespace DesignPatterns\Tests\Behavioral\State;

use DesignPatterns\Behavioral\State\example1\ContextOrder;
use DesignPatterns\Behavioral\State\example1\CreateOrder;
use PHPUnit\Framework\TestCase;

/**
 * Class Example1Test
 * @package DesignPatterns\Tests\Behavioral\State
 */
class Example1Test extends TestCase
{
    public function testCanShipCreatedOrder()
    {
        $order = new CreateOrder();
        $contextOrder = new ContextOrder();
        $contextOrder->setState($order);
        $contextOrder->done();

        $this->assertEquals('shipping', $contextOrder->getStatus());
    }

    public function testCanCompleteShippedOrder()
    {
        $order = new CreateOrder();
        $contextOrder = new ContextOrder();
        $contextOrder->setState($order);
        $contextOrder->done();
        $contextOrder->done();

        $this->assertEquals('completed', $contextOrder->getStatus());
    }
}

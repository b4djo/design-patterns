<?php

namespace DesignPatterns\Creational\Pool\Tests;

use DesignPatterns\Creational\Pool\ObjectPool;
use PHPUnit\Framework\TestCase;

class ObjectPoolTest extends TestCase
{
    public function testCanGetNewInstancesWithGet()
    {
        $pool = new ObjectPool();
        $product1 = $pool->get();
        $product2 = $pool->get();

        $this->assertCount(5, $pool);
        $this->assertNotSame($product1, $product2);
    }

    public function testCanGetSameInstanceTwiceWhenDisposingItFirst()
    {
        $pool = new ObjectPool();
        $product1 = $pool->get();
        $pool->push($product1);
        $product2 = $pool->get();

        $this->assertCount(5, $pool);
        $this->assertSame($product1, $product2);
    }
}

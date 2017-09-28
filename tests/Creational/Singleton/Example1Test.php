<?php

namespace DesignPatterns\Tests\Creational\Singleton;

use DesignPatterns\Creational\Singleton\example1\Singleton;
use PHPUnit\Framework\TestCase;

/**
 * Class Example1Test
 * @package DesignPatterns\Tests\Creational
 */
class Example1Test extends TestCase
{
    public function testUniqueness()
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }
}

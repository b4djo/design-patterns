<?php

namespace DesignPatterns\Tests\Behavioral\NullObject;

use DesignPatterns\Behavioral\NullObject\example2\NullLogger;
use DesignPatterns\Behavioral\NullObject\example2\PrintLogger;
use DesignPatterns\Behavioral\NullObject\example2\Service;
use PHPUnit\Framework\TestCase;

/**
 * Class Example2Test
 * @package DesignPatterns\Tests\Behavioral\NullObject
 */
class Example2Test extends TestCase
{
    public function testNullObject()
    {
        $service = new Service(new NullLogger());
        $this->expectOutputString('');
        $service->doSomething();
    }

    public function testStandardLogger()
    {
        $service = new Service(new PrintLogger());
        $this->expectOutputString('We are in DesignPatterns\Behavioral\NullObject\example2\Service::doSomething');
        $service->doSomething();
    }
}

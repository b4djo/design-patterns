<?php

namespace DesignPatterns\Tests\Behavioral\example2;

use DesignPatterns\Behavioral\NullObject\example2\NullLogger;
use DesignPatterns\Behavioral\NullObject\example2\PrintLogger;
use DesignPatterns\Behavioral\NullObject\example2\Service;
use PHPUnit\Framework\TestCase;

/**
 * Class NullObjectTest
 * @package DesignPatterns\Tests\Behavioral\example2
 */
class NullObjectTest extends TestCase
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

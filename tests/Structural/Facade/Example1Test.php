<?php

namespace DesignPatterns\Tests\Structural\Facade;

use DesignPatterns\app\Structural\Facade\Example1\CpuInterface;
use DesignPatterns\app\Structural\Facade\Example1\Facade;
use PHPUnit\Framework\TestCase;

/**
 * Class Example1Test
 * @package DesignPatterns\Tests\Structural\Decorator\Example2
 */
class Example1Test extends TestCase
{
    public function testComputerOn()
    {
        /** @var CpuInterface|\PHPUnit_Framework_MockObject_MockObject $os */
        $cpu = $this->createMock('DesignPatterns\Structural\Facade\Example1\CpuInterface');

        $cpu->method('getName')
            ->will($this->returnValue('Intel'));

        $hd = $this->getMockBuilder('DesignPatterns\Structural\Facade\Example1\HardDriverInterface')
            ->setMethods(['reading'])
            ->disableAutoload()
            ->getMock();

        $hd->expects($this->once())
            ->method('reading')
            ->with($cpu);

        $memory = $this->createMock('DesignPatterns\Structural\Facade\Example1\MemoryInterface');

        $facade = new Facade($cpu, $hd, $memory);

        // the facade interface is simple
        $facade->startComputer();

        // but you can also access the underlying components
        $this->assertSame('Intel', $cpu->getName());
    }
}
<?php

namespace DesignPatterns\Tests\Structural\Facade;

use DesignPatterns\Structural\Facade\Example2\Facade;
use DesignPatterns\Structural\Facade\Example2\OsInterface;
use PHPUnit\Framework\TestCase;

/**
 * Class Example2Test
 * @package DesignPatterns\Tests\Structural\Decorator\Example2
 */
class Example2Test extends TestCase
{
    public function testComputerOn()
    {
        /** @var OsInterface|\PHPUnit_Framework_MockObject_MockObject $os */
        $os = $this->createMock('DesignPatterns\Structural\Facade\Example2\OsInterface');

        $os->method('getName')
            ->will($this->returnValue('Linux'));

        $bios = $this->getMockBuilder('DesignPatterns\Structural\Facade\Example2\BiosInterface')
            ->setMethods(['launch', 'execute', 'waitForKeyPress'])
            ->disableAutoload()
            ->getMock();

        $bios->expects($this->once())
            ->method('launch')
            ->with($os);

        $facade = new Facade($bios, $os);

        // the facade interface is simple
        $facade->turnOn();

        // but you can also access the underlying components
        $this->assertSame('Linux', $os->getName());
    }
}
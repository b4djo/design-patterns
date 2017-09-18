<?php

namespace DesignPatterns\Tests\Behavioral;

use DesignPatterns\Behavioral\Mediator\Subsystem\Client;
use DesignPatterns\Behavioral\Mediator\Subsystem\Database;
use DesignPatterns\Behavioral\Mediator\Mediator;
use DesignPatterns\Behavioral\Mediator\Subsystem\Server;
use PHPUnit\Framework\TestCase;

/**
 * Class MediatorTest
 * @package DesignPatterns\Tests\Behavioral
 */
class MediatorTest extends TestCase
{
    public function testOutputHelloWorld()
    {
        new Mediator(new Server(), new Database(), $client = new Client());

        $this->expectOutputString('Hello World');
        $client->request();
    }
}

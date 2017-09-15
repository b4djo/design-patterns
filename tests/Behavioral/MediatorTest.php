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
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        require_once __DIR__ . '/../../vendor/autoload.php';
    }

    public function testOutputHelloWorld()
    {
        new Mediator(new Server(), new Database(), $client = new Client());

        $this->expectOutputString('Hello World');
        $client->request();
    }
}

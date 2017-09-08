<?php

namespace DesignPatterns\Tests\Structural;

use DesignPatterns\Structural\Proxy\ApartmentDoor;
use DesignPatterns\Structural\Proxy\Security;
use PHPUnit\Framework\TestCase;

/**
 * Class ProxyTest
 * @package DesignPatterns\tests\Structural
 */
class ProxyTest extends TestCase
{
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        require_once __DIR__ . '/../../vendor/autoload.php';
    }

    public function testProxy()
    {
        $door = new Security(new ApartmentDoor());
        $this->assertEquals('Access denied', $door->open('password'));
        $this->assertEquals('Door apartment is opened', $door->open('p4ssw0rd'));
        $this->assertEquals('Door apartment is closed', $door->close());
    }
}

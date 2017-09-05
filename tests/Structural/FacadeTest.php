<?php

namespace DesignPatterns\tests\Structural;

use PHPUnit\Framework\TestCase;

/**
 * Class FacadeTest
 * @package DesignPatterns\tests\Structural
 */
class FacadeTest extends TestCase
{
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        require_once __DIR__ . '/../../vendor/autoload.php';
    }

    public function testTest()
    {
        $this->assertEquals(1, 1);
    }
}

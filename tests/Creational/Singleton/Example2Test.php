<?php

namespace DesignPatterns\Tests\Creational\Singleton;

use DesignPatterns\Creational\Singleton\example2\Logger;
use PHPUnit\Framework\TestCase;

/**
 * Class Example2Test
 * @package DesignPatterns\Tests\Creational\Singleton
 */
class Example2Test extends TestCase
{
    public function testAddRowToLogFile()
    {
        Logger::add('Row 1');
        Logger::add('Row 2');
        $text = file_get_contents(realpath('../app/Creational/Singleton/example2') . '/logger.txt');

        $this->assertEquals("Row 1\nRow 2\n", $text);
    }
}

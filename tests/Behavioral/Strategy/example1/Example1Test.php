<?php

namespace DesignPatterns\Tests\Strategy\example1;

use DesignPatterns\Behavioral\Strategy\example1\Axe;
use DesignPatterns\Behavioral\Strategy\example1\King;
use Exception;
use PHPUnit\Framework\TestCase;

/**
 * Class Example1Test
 * @package DesignPatterns\Tests\Strategy\example1
 */
class Example1Test extends TestCase
{
    public function testCanTalk()
    {
        $king = new King();
        $king->talk();

        $this->expectOutputString('I\'m the King!');
    }

    public function testCanKingAxeDamage()
    {
        $king = new King();
        $king->setWeapon(new Axe());

        $this->assertEquals(1000, $king->attack());
    }

    public function testThrowsExceptionWhenNotSetWeapon()
    {
        $this->expectException(Exception::class);

        $king = new King();
        $king->attack();
    }

    public function testThrowsExceptionMessageWhenNotSetWeapon()
    {
        $this->expectExceptionMessage('You must use setWeapon() function');

        $king = new King();
        $king->attack();
    }
}

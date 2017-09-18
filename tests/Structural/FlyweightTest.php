<?php

namespace DesignPatterns\Tests\Structural;

use DesignPatterns\Structural\Flyweight\FlyweightFactory;
use PHPUnit\Framework\TestCase;

/**
 * Class FlyweightTest
 * @package DesignPatterns\Tests\Structural
 */
class FlyweightTest extends TestCase
{
    /**
     * @var array
     */
    private $characters = [
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k',
        'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'
    ];

    /**
     * @var array
     */
    private $fonts = ['Arial', 'Times New Roman', 'Verdana', 'Helvetica'];

    public function testFlyweight()
    {
        $factory = new FlyweightFactory();

        foreach ($this->characters as $character) {
            foreach ($this->fonts as $font) {
                $flyweight = $factory->get($character);
                $rendered = $flyweight->render($font);

                $this->assertEquals(sprintf('Character %s with font %s', $character, $font), $rendered);
            }
        }

        $this->assertCount(count($this->characters), $factory);
    }
}

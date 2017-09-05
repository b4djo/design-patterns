<?php

namespace DesignPatterns\Structural\Flyweight;

/**
 * Class CharacterFlyweight
 * @package DesignPatterns\app\Structural\Flyweight
 */
class CharacterFlyweight implements FlyweightInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * CharacterFlyweight constructor.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * External state (context) transmitted in flyweight
     *
     * @param string $font
     * @return mixed
     * @internal param string $extrinsicState
     */
    public function render(string $font)/*: string*/
    {
        return sprintf('Character %s with font %s', $this->name, $font);
    }
}

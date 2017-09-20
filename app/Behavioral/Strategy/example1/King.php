<?php

namespace DesignPatterns\Behavioral\Strategy\example1;

/**
 * Class King
 * @package DesignPatterns\Behavioral\Strategy\example1
 */
class King extends AbstractCharacter
{
    public function talk()
    {
        echo 'I\'m the King!';
    }
}

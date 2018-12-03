<?php

namespace DesignPatterns\Structural\Composite\Example1;

/**
 * Class InputElement
 * @package DesignPatterns\Structural\Composite\Example1
 */
class InputElement implements RenderInterface
{
    /**
     * @return string
     */
    public function render(): string
    {
        return '<input type="text" />';
    }
}

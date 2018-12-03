<?php

namespace DesignPatterns\Structural\Composite\Example1;

/**
 * Class TextElement
 * @package Structural\Composite\Example1
 */
class TextElement implements RenderInterface
{
    /**
     * @var string
     */
    private $text;

    /**
     * TextElement constructor.
     * @param string $text
     */
    public function __construct(string $text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function render(): string
    {
        return $this->text;
    }
}

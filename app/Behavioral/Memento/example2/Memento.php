<?php

namespace DesignPatterns\Behavioral\Memento\example2;

/**
 * Class Memento
 * @package DesignPatterns\Behavioral\Memento\example2
 */
class Memento
{
    /**
     * @var string
     */
    private $content;

    /**
     * Memento constructor.
     *
     * @param string $content
     */
    public function __construct(string $content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
}

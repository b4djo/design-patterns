<?php

namespace DesignPatterns\Behavioral\Memento\example2;

/**
 * Class Editor
 * @package DesignPatterns\Behavioral\Memento\example2
 */
class Editor
{
    /**
     * @var string
     */
    private $content = '';

    /**
     * @param string $words
     */
    public function typing(string $words)
    {
        $this->content .= $words;
    }

    /**
     * @return string
     */
    public function getContent()/*: string*/
    {
        return $this->content;
    }

    /**
     * @return Memento
     */
    public function save()
    {
        return new Memento($this->content);
    }

    /**
     * @param Memento $memento
     */
    public function restore(Memento $memento)
    {
        $this->content = $memento->getContent();
    }
}

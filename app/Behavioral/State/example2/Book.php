<?php

namespace DesignPatterns\Behavioral\State\example2;

/**
 * Class Book
 * @package DesignPatterns\Behavioral\State\example2
 */
class Book
{
    /**
     * @var string
     */
    private $author;

    /**
     * @var string
     */
    private $title;

    /**
     * Book constructor.
     *
     * @param string $title
     * @param string $author
     */
    public function __construct(/*string*/ $title, /*string */$author)
    {
        $this->author = $author;
        $this->title  = $title;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getAuthorAndTitle()
    {
        return $this->getTitle() . ' by ' . $this->getAuthor();
    }
}

<?php

namespace DesignPatterns\Behavioral\State\example2;

/**
 * Class BookContext
 * @package DesignPatterns\Behavioral\State\example2
 */
class BookContext
{
    /**
     * @var string
     */
    private $book = null;

    /**
     * @var string
     */
    private $bookTitleState = null;

    /**
     * BookList is not instantiated at construct time
     * BookContext constructor.
     *
     * @param $bookIn
     */
    public function __construct($bookIn)
    {
        $this->book = $bookIn;
        $this->setTitleState(new BookTitleStateStars());
    }

    /**
     * @return mixed
     */
    public function getBookTitle()
    {
        return $this->bookTitleState->showTitle($this);
    }

    /**
     * @return string
     */
    public function getBook()
    {
        return $this->book;
    }

    /**
     * @param $titleStateIn
     */
    public function setTitleState($titleStateIn)
    {
        $this->bookTitleState = $titleStateIn;
    }
}

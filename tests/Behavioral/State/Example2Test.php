<?php

namespace DesignPatterns\Tests\Behavioral\State;


use DesignPatterns\Behavioral\State\example2\Book;
use DesignPatterns\Behavioral\State\example2\BookContext;
use PHPUnit\Framework\TestCase;

/**
 * Class Example2Test
 * @package DesignPatterns\Tests\Behavioral\State
 */
class Example2Test extends TestCase
{
    public function testCreateBook()
    {
        $book = new Book('Test title book', 'Test Author');

        $this->assertEquals('Test title book by Test Author', $book->getAuthorAndTitle());
        $this->assertEquals('Test title book', $book->getTitle());
        $this->assertEquals('Test Author', $book->getAuthor());
    }

    public function testCanStarsTitle()
    {
        $book = new Book('Test title book', 'Test Author');
        $context = new BookContext($book);

        $this->assertEquals('Test*title*book', $context->getBookTitle());
    }

    public function testCanExclaimTitle()
    {
        $book = new Book('Test title book', 'Test Author');
        $context = new BookContext($book);

        $this->assertEquals('Test*title*book', $context->getBookTitle());
        $this->assertEquals('Test*title*book', $context->getBookTitle());
        $this->assertEquals('Test!title!book', $context->getBookTitle());
    }
}

<?php

namespace DesignPatterns\Tests\Structural;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Structural\Adapter\example2\Book;
use DesignPatterns\Structural\Adapter\example2\EBookAdapter;
use DesignPatterns\Structural\Adapter\example2\Kindle;

/**
 * Class Example2Test
 * @package DesignPatterns\tests\Structural
 */
class Example2Test extends TestCase
{
    public function testCanTurnPageOnBook()
    {
        $book = new Book();
        $book->open();
        $book->turnPage();

        $this->assertSame(2, $book->getPage());
    }

    public function testCanTurnPageOnKindleLikeInANormalBook()
    {
        $kindle = new Kindle();
        $book = new EBookAdapter($kindle);

        $book->open();
        $book->turnPage();

        $this->assertSame(2, $book->getPage());
    }
}

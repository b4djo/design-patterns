<?php

namespace DesignPatterns\Behavioral\State\example2;

use DesignPatterns\Behavioral\State\example2\BookTitleStateInterface;

/**
 * Class BookTitleStateExclaim
 * @package DesignPatterns\Behavioral\State\example2
 */
class BookTitleStateExclaim implements BookTitleStateInterface
{
    /**
     * @var int
     */
    private $titleCount = 0;

    /**
     * @param $contextIn
     *
     * @return mixed
     */
    public function showTitle($contextIn)
    {
        $title = $contextIn->getBook()->getTitle();
        $this->titleCount++;
        $contextIn->setTitleState(new BookTitleStateStars());

        return Str_replace(' ', '!', $title);
    }
}

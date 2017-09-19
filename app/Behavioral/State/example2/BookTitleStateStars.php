<?php

namespace DesignPatterns\Behavioral\State\example2;

use DesignPatterns\Behavioral\State\example2\BookTitleStateInterface;

/**
 * Class BookTitleStateStars
 * @package DesignPatterns\Behavioral\State\example2
 */
class BookTitleStateStars implements BookTitleStateInterface
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

        if (1 < $this->titleCount) {
            $contextIn->setTitleState(new BookTitleStateExclaim);
        }

        return Str_replace(' ', '*', $title);
    }
}

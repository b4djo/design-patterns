<?php

namespace DesignPatterns\Behavioral\State\example2;

/**
 * Interface BookTitleStateInterface
 * @package DesignPatterns\Behavioral\State\exmaple2
 */
interface BookTitleStateInterface
{
    /**
     * @param $contextIn
     *
     * @return mixed
     */
    public function showTitle($contextIn);
}
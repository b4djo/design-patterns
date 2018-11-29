<?php

namespace DesignPatterns\Structural\Adapter\example2;

/**
 * Interface BookInterface
 * @package DesignPatterns\DesignPatterns\Structural\Adapter\example2
 */
interface BookInterface
{
    public function turnPage();

    public function open();

    public function getPage(): int;
}

<?php

namespace DesignPatterns\Structural\Facade\Example2;

/**
 * Class OsInterface
 * @package DesignPatterns\Structural\Facade\Example2
 */
interface OsInterface
{
    public function halt();

    public function getName(): string;
}

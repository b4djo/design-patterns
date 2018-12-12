<?php

namespace DesignPatterns\Structural\Proxy\Example1;

/**
 * Interface Door
 * @package DesignPatterns\app\Structural\Proxy
 */
interface Door
{
    /**
     * @return string
     */
    public function open();

    /**
     * @return string
     */
    public function close();
}

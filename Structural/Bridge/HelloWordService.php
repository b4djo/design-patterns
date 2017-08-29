<?php

namespace DesignPatterns\Structural\Bridge;

/**
 * Class HelloWordService
 * @package DesignPatterns\Structural\Bridge
 */
class HelloWordService extends Service
{
    public function get()
    {
        return $this->implementation->format('Hello world');
    }
}

<?php

namespace DesignPatterns\Behavioral\NullObject\example2;

/**
 * Class NullLogger
 * @package DesignPatterns\Behavioral\NullObject\example2
 */
class NullLogger implements LoggerInterface
{
    /**
     * @param string $str
     *
     * @return mixed
     */
    public function log(string $str)
    {
        // Do nothing
    }
}

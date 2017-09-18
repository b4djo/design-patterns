<?php

namespace DesignPatterns\Behavioral\NullObject\example2;

/**
 * Class PrintLogger
 * @package DesignPatterns\Behavioral\NullObject\example2
 */
class PrintLogger implements LoggerInterface
{
    /**
     * @param string $str
     *
     * @return mixed
     */
    public function log(string $str)
    {
        echo $str;
    }
}

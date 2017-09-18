<?php

namespace DesignPatterns\Behavioral\NullObject\example2;

/**
 * Interface LoggerInterface
 * @package DesignPatterns\Behavioral\NullObject\example2
 */
interface LoggerInterface
{
    /**
     * @param string $str
     *
     * @return mixed
     */
    public function log(string $str);
}

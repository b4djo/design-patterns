<?php

namespace DesignPatterns\Behavioral\Mediator\Subsystem;

use DesignPatterns\Behavioral\Mediator\Colleague;

/**
 * Class Database
 * @package DesignPatterns\Behavioral\Mediator\Subsystem
 */
class Database extends Colleague
{
    /**
     * @return string
     */
    public function getData()/*: string*/
    {
        return 'World';
    }
}

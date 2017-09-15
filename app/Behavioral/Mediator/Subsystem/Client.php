<?php

namespace DesignPatterns\Behavioral\Mediator\Subsystem;

use DesignPatterns\Behavioral\Mediator\Colleague;

/**
 * Client is a client that makes requests and gets the response
 * Class Client
 * @package DesignPatterns\Behavioral\Mediator\Subsystem
 */
class Client extends Colleague
{
    public function request()
    {
        $this->mediator->makeRequest();
    }

    /**
     * @param string $content
     */
    public function output(string $content)
    {
        echo $content;
    }
}

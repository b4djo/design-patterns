<?php

namespace DesignPatterns\Behavioral\NullObject\example2;

/**
 * Class Service
 * @package DesignPatterns\Behavioral\NullObject\example2
 */
class Service
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * do something ...
     */
    public function doSomething()
    {
        // Notice here that you don't have to check if the logger is set with eg. is_null(), instead just use it
        $this->logger->log('We are in ' . __METHOD__);
    }
}

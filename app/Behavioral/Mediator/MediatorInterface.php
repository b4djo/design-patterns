<?php

namespace DesignPatterns\Behavioral\Mediator;

/**
 * MediatorInterface is a contract for the Mediator
 * This interface is not mandatory but it is better for Liskov substitution principle concerns.
 * Interface MediatorInterface
 * @package Behavioral\Mediator
 */
interface MediatorInterface
{
    /**
     * Sends the response
     * @param string $content
     */
    public function sendResponse($content);

    /**
     * Makes a request
     */
    public function makeRequest();

    /**
     * Queries the DB
     */
    public function queryDb();
}

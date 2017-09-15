<?php

namespace DesignPatterns\Behavioral\Mediator;

/**
 * Mediator is the concrete Mediator for this design pattern
 *
 * In this example, I have made a "Hello World" with the Mediator Pattern
 */
class Mediator implements MediatorInterface
{
    /**
     * @var Subsystem\Server
     */
    private $server;

    /**
     * @var Subsystem\Database
     */
    private $database;

    /**
     * @var Subsystem\Client
     */
    private $client;

    /**
     * Mediator constructor.
     *
     * @param Subsystem\Server $server
     * @param Subsystem\Database $database
     * @param Subsystem\Client $client
     */
    public function __construct(Subsystem\Server $server, Subsystem\Database $database, Subsystem\Client $client)
    {
        $this->server = $server;
        $this->database = $database;
        $this->client = $client;

        $this->database->setMediator($this);
        $this->server->setMediator($this);
        $this->client->setMediator($this);
    }

    /**
     * Sends the response
     *
     * @param string $content
     */
    public function sendResponse($content)
    {
        $this->client->output($content);
    }

    /**
     * Makes a request
     */
    public function makeRequest()/*: string*/
    {
        $this->server->process();
    }

    /**
     * Queries the DB
     */
    public function queryDb()
    {
        return $this->database->getData();
    }
}

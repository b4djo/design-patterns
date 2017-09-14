<?php

namespace DesignPatterns\Behavioral\Command;

/**
 * Class HelloCommand
 * @package DesignPatterns\Behavioral\Command
 */
class HelloCommand implements CommandInterface
{
    /**
     * @var Receiver
     */
    private $output;

    /**
     * HelloCommand constructor.
     *
     * @param Receiver $console
     */
    public function __construct(Receiver $console)
    {
        $this->output = $console;
    }

    /**
     * Execute and output "Hello World".
     */
    public function execute()
    {
        $this->output->write('Hello World');
    }
}

<?php

namespace DesignPatterns\Behavioral\Command;

/**
 * Class Invoker
 * @package DesignPatterns\Behavioral\Command
 */
class Invoker
{
    /**
     * @var CommandInterface
     */
    private $command;

    /**
     * @param CommandInterface $command
     */
    public function setCommand(CommandInterface $command)
    {
        $this->command = $command;
    }

    public function run()
    {
        $this->command->execute();
    }
}

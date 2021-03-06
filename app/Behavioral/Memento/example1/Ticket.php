<?php

namespace DesignPatterns\Behavioral\Memento\example1;

/**
 * Ticket is the "Originator" in this implementation
 *
 * Class Ticket
 * @package DesignPatterns\Behavioral\Memento
 */
class Ticket
{
    /**
     * @var State
     */
    private $currentState;

    /**
     * Ticket constructor.
     */
    public function __construct()
    {
        $this->currentState = new State(State::STATE_CREATED);
    }

    public function open()
    {
        $this->currentState = new State(State::STATE_OPENED);
    }

    public function assign()
    {
        $this->currentState = new State(State::STATE_ASSIGNED);
    }

    public function close()
    {
        $this->currentState = new State(State::STATE_CLOSED);
    }

    /**
     * @return Memento
     */
    public function saveToMemento()/*: Memento*/
    {
        return new Memento(clone $this->currentState);
    }

    /**
     * @param Memento $memento
     */
    public function restoreFromMemento(Memento $memento)
    {
        $this->currentState = $memento->getState();
    }

    /**
     * @return State
     */
    public function getState()/*: State*/
    {
        return $this->currentState;
    }
}

<?php

namespace DesignPatterns\Behavioral\Memento;

/**
 * Class Momento
 * @package DesignPatterns\Behavioral\Memento
 */
class Memento
{
    /**
     * @var State
     */
    private $state;

    /**
     * Momento constructor.
     *
     * @param State $stateToSave
     */
    public function __construct(State $stateToSave)
    {
        $this->state = $stateToSave;
    }

    /**
     * @return State
     */
    public function getState()/*: State*/
    {
        return $this->state;
    }
}

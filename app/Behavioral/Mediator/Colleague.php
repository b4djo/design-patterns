<?php

namespace DesignPatterns\Behavioral\Mediator;

/**
 * Colleague is an abstract colleague who works together but he only knows the Mediator, not other colleagues
 * Class Colleague
 * @package DesignPatterns\Behavioral\Mediator
 */
abstract class Colleague
{
    /**
     * This ensures no change in subclasses.
     *
     * @var MediatorInterface
     */
    protected $mediator;

    /**
     * @param MediatorInterface $mediator
     */
    public function setMediator(MediatorInterface $mediator)
    {
        $this->mediator = $mediator;
    }
}

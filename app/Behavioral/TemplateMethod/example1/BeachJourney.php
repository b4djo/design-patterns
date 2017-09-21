<?php

namespace DesignPatterns\Behavioral\TemplateMethod\example1;

/**
 * Class BeachJourney
 * @package DesignPatterns\Behavioral\TemplateMethod\example1
 */
class BeachJourney extends Journey
{
    /**
     * This method must be implemented, this is the key-feature of this pattern.
     */
    protected function enjoyVacation()/*: string*/
    {
        return "Swimming and sun-bathing";
    }
}

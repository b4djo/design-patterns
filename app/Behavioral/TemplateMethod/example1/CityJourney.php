<?php

namespace DesignPatterns\Behavioral\TemplateMethod\example1;

/**
 * Class CityJourney
 * @package DesignPatterns\Behavioral\TemplateMethod\example1
 */
class CityJourney extends Journey
{
    /**
     * This method must be implemented, this is the key-feature of this pattern.
     */
    protected function enjoyVacation()/*: string*/
    {
        return "Eat, drink, take photos and sleep";
    }

    protected function buyGift()/*: string*/
    {
        return "Buy a gift";
    }
}

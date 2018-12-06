<?php

namespace DesignPatterns\Structural\Decorator\Example2;

/**
 * Interface Booking
 * @package DesignPatterns\Structural\Decorator\Example2
 */
interface Booking
{
    public function calculatePrice(): int;

    public function getDescription(): string;
}
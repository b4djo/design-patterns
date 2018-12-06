<?php

namespace DesignPatterns\Structural\Decorator\Example2;

/**
 * Class WiFi
 * @package DesignPatterns\Structural\Decorator\Example2
 */
class WiFi extends BookingDecorator
{
    private const PRICE = 2;

    /**
     * @return int
     */
    public function calculatePrice(): int
    {
        return $this->booking->calculatePrice() + self::PRICE;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->booking->getDescription() . ' with wifi';
    }
}

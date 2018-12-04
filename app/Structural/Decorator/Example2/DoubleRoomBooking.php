<?php

namespace DesignPatterns\Structural\Decorator\Example2;

/**
 * Class DoubleRoomBooking
 * @package DesignPatterns\Structural\Decorator\Example2
 */
class DoubleRoomBooking implements Booking
{
    /**
     * @return int
     */
    public function calculatePrice(): int
    {
        return 40;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return 'double room';
    }
}

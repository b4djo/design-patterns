<?php

namespace DesignPatterns\Structural\Decorator\Example2;

/**
 * Class BookingDecorator
 * @package DesignPatterns\Structural\Decorator\Example2
 */
abstract class BookingDecorator implements Booking
{
    /**
     * @var Booking
     */
    protected $booking;

    /**
     * BookingDecorator constructor.
     * @param Booking $booking
     */
    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }
}

<?php

namespace DesignPatterns\Structural\Proxy;

/**
 * Class ApartmentDoor
 * @package DesignPatterns\Structural\Proxy
 */
class ApartmentDoor implements Door
{
    public function open()
    {
        return 'Door apartment is opened';
    }

    public function close()
    {
        return 'Door apartment is closed';
    }
}

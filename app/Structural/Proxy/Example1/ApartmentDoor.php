<?php

namespace DesignPatterns\Structural\Proxy\Example1;

/**
 * Class ApartmentDoor
 * @package DesignPatterns\Structural\Proxy
 */
class ApartmentDoor implements Door
{
    /**
     * {@inheritdoc}
     */
    public function open()
    {
        return 'Door apartment is opened';
    }

    /**
     * {@inheritdoc}
     */
    public function close()
    {
        return 'Door apartment is closed';
    }
}

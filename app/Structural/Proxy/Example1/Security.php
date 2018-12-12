<?php

namespace DesignPatterns\Structural\Proxy\Example1;

/**
 * Class Security
 * @package DesignPatterns\Structural\Proxy
 */
class Security
{
    /**
     * @var Door
     */
    protected $door;

    /**
     * Security constructor.
     *
     * @param Door $door
     */
    public function __construct(Door $door)
    {
        $this->door = $door;
    }

    /**
     * @param $password
     *
     * @return string
     */
    public function open($password)
    {
        if ($this->authenticate($password)) {
            return $this->door->open();
        }

        return 'Access denied';
    }

    /**
     * @param $password
     *
     * @return bool
     */
    private function authenticate($password)
    {
        return $password === 'p4ssw0rd';
    }

    /**
     * @return string
     */
    public function close()
    {
        return $this->door->close();
    }
}

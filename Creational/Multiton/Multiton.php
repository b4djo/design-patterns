<?php

namespace DesignPatterns\Creational\Multiton;

/**
 * Class Multiton
 * @package DesignPatterns\Creational\Multiton
 */
final class Multiton
{
    const INSTANCE_1 = '1';
    const INSTANCE_2 = '2';

    /**
     * @var array
     */
    private static $instances = [];

    /**
     * Multiton constructor.
     */
    private function __construct()
    {
    }

    /**
     * @param string $instanceName
     * @return Multiton
     */
    public static function getInstance(string $instanceName): Multiton
    {
        if (!isset(self::$instances[$instanceName])) {
            self::$instances[$instanceName] = new self();
        }

        return self::$instances[$instanceName];
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}

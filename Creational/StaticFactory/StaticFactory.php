<?php
/**
 * @see http://designpatternsphp.readthedocs.io/ru/latest/Creational/StaticFactory/README.html
 */
namespace DesignPatterns\Creational\StaticFactory;

/**
 * Class StaticFactory
 * @package DesignPatterns\Creational\StaticFactory
 */
final class StaticFactory
{
    /**
     * @param string $type
     * @return Car
     */
    public static function factory(string $type): Car
    {
        if ($type == 'Mazda3') {
            return new Mazda3();
        }

        if ($type == 'Corolla') {
            return new Corolla();
        }

        throw new \InvalidArgumentException('Unknown car type');
    }
}
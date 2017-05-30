<?php
/**
 * Design pattern: Abstract Factory
 *
 * @package Design_Patterns
 * @category Creational_Design_Patterns
 * @author Fakthullin Robert <fatkhullin.robert@gmail.com>
 * @license https://opensource.org/licenses/MIT MIT
 * @link http://designpatternsphp.readthedocs.io/ru/latest/Creational/AbstractFactory/README.html#
 */

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Class AbstractFactory
 * @package DesignPatterns\Creational\AbstractFactory
 */
abstract class AbstractFactory
{
    /**
     * @param string $model
     * @return Car
     */
    abstract public function paintCar(string $model): Car;

    /**
     * @param string $model
     * @return Car
     */
    abstract public function fillUpCar(string $model): Car;

    /**
     * @param string $model
     * @return Car
     */
    abstract public function testDriveCar(string $model): Car;
}
<?php

namespace DesignPatterns\Creational\SimpleFactory;

/**
 * Interface Conveyer
 * @package DesignPatterns\Creational\SimpleFactory
 */
interface Conveyer
{
    /**
     * Сборка двигателя
     * @return mixed
     */
    public function buildEngine();
    
    /**
     * Установка колес
     * @return mixed
     */
    public function attachWheels();
    
    /**
     * Тест автомобиля
     * @return mixed
     */
    public function testDrive();
}
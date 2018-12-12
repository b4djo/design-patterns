<?php

namespace DesignPatterns\Structural\Facade\Example2;

/**
 * Interface BiosInterface
 * @package DesignPatterns\Structural\Facade\Example2
 */
interface BiosInterface
{
    public function execute();

    public function waitForKeyPress();

    public function launch(OsInterface $os);

    public function powerDown();
}

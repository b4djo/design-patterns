<?php

namespace DesignPatterns\Structural\Decorator;

/**
 * Class EMail
 * @package DesignPatterns\Structural\Decorator
 */
class EMail implements EMailInterface
{
    private $header = 'Header';
    private $footer = 'Footer';

    public function loadBody()
    {
        echo "Body of basic mail<br />";
    }
}

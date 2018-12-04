<?php

namespace DesignPatterns\Structural\Decorator;

/**
 * Class ChristmasEMail
 * @package DesignPatterns\Structural\Decorator
 */
class ChristmasEMail extends EMailDecorator
{
    public function loadBody()
    {
        echo 'Christmas body mail<br />';
        $this->eMail->loadBody();
    }
}

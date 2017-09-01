<?php

namespace DesignPatterns\Structural\Decorator;

/**
 * Class NewYearEMail
 * @package DesignPatterns\Structural\Decorator
 */
class NewYearEMail extends EMailDecorator
{
    public function loadBody()
    {
        echo 'New Year body mail<br />';
        $this->eMail->loadBody();
    }
}

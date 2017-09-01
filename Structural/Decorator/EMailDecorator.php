<?php
namespace DesignPatterns\Structural\Decorator;

/**
 * Class EMailDecorator
 * @package DesignPatterns\Structural\Decorator
 */
abstract class EMailDecorator implements EMailInterface
{
    /**
     * @var EMail
     */
    protected $eMail;

    public function __construct(EMailInterface $eMail)
    {
        $this->eMail = $eMail;
    }

    abstract public function loadBody();
}

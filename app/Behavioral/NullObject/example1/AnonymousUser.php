<?php

namespace DesignPatterns\Behavioral\NullObject\example1;

/**
 * Class AnonymousUser
 * @package DesignPatterns\Behavioral\NullObject\example1
 */
class AnonymousUser extends AbstractUser
{
    const NAME = 'Anonymous user';

    /**
     * @return bool
     */
    public function isNull()
    {
        return true;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return self::NAME;
    }
}

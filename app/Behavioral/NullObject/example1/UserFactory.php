<?php

namespace DesignPatterns\Behavioral\NullObject\example1;

/**
 * Class UserFactory
 * @package DesignPatterns\Behavioral\NullObject\example1
 */
class UserFactory
{
    /**
     * @var array
     */
    private static $users = ['User 1', 'User 3', 'User 5'];

    /**
     * @param $user
     *
     * @return AnonymousUser|User
     */
    public function getUser($user)
    {
        if (in_array($user, self::$users)) {
            return new User($user);
        }

        return new AnonymousUser();
    }
}

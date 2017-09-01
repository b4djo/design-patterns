<?php

namespace DesignPatterns\Structural\DataMapper;

/**
 * Class User
 * @package DesignPatterns\Structural\DataMapper
 */
class User
{
    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $email;

    /**
     * User constructor.
     * @param $login
     * @param $email
     */
    public function __construct($login, $email)
    {
        $this->login = $login;
        $this->email = $email;
    }

    /**
     * @param array $state
     * @return User
     */
    public static function fromState(array $state): User
    {
        return new self(
            $state['username'],
            $state['email']
        );
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
}

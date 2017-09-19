<?php

namespace DesignPatterns\Behavioral\Specification;

/**
 * Class User
 * @package DesignPatterns\Behavioral\Specification
 */
class User
{
    /**
     * @var string
     */
    public $company;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $city;

    /**
     * User constructor.
     *
     * @param string $company
     * @param string $name
     * @param string $city
     */
    public function __construct(string $company, string $name, string $city)
    {
        $this->company = $company;
        $this->name = $name;
        $this->city = $city;
    }
}

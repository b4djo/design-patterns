<?php

namespace DesignPatterns\Additional\Delegation\example1;

/**
 * Class JuniorDeveloper
 * @package DesignPatterns\Additional\Delegation\example1
 */
class JuniorDeveloper
{
    /**
     * @return string
     */
    public function writeBadCode()/*: string*/
    {
        return 'Some junior developer generated code...';
    }
}

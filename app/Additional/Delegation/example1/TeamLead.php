<?php

namespace DesignPatterns\Additional\Delegation\example1;

/**
 * Class TeamLead
 * @package DesignPatterns\Additional\Delegation\example1
 */
class TeamLead
{
    /**
     * @var JuniorDeveloper
     */
    private $juniorDeveloper;

    /**
     * TeamLead constructor.
     *
     * @param JuniorDeveloper $juniorDeveloper
     */
    public function __construct(JuniorDeveloper $juniorDeveloper)
    {
        $this->juniorDeveloper = $juniorDeveloper;
    }

    /**
     * @return string
     */
    public function writeCode()/*: string*/
    {
        return $this->juniorDeveloper->writeBadCode();
    }
}

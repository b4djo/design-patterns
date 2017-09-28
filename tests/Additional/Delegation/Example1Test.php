<?php

namespace DesignPatterns\Tests\Additional\Delegation;

use DesignPatterns\Additional\Delegation\example1\JuniorDeveloper;
use DesignPatterns\Additional\Delegation\example1\TeamLead;
use PHPUnit\Framework\TestCase;

/**
 * Class Example1Test
 * @package DesignPatterns\Tests\Additional\Delegation
 */
class Example1Test extends TestCase
{
    public function testHowTeamLeadWriteCode()
    {
        $junior = new JuniorDeveloper();
        $teamLead = new TeamLead($junior);

        $this->assertEquals($junior->writeBadCode(), $teamLead->writeCode());
    }
}

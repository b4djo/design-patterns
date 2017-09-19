<?php

namespace DesignPatterns\Tests\Behavioral;

use DesignPatterns\Behavioral\Specification\User;
use DesignPatterns\Behavioral\Specification\UserCompanySpecification;
use PHPUnit\Framework\TestCase;

/**
 * Class SpecificationTest
 * @package DesignPatterns\Tests\Behavioral
 */
class SpecificationTest extends TestCase
{
    public function testCanUserCompany()
    {
        $user = new User('Company', 'Username', 'City');
        $userCompany = new UserCompanySpecification('Company');

        $this->assertTrue($userCompany->isSatisfiedBy($user));
    }

    public function testNotCanUserCompany()
    {
        $user = new User('Company1', 'Username', 'City');
        $userCompany = new UserCompanySpecification('Company2');

        $this->assertFalse($userCompany->isSatisfiedBy($user));
    }
}

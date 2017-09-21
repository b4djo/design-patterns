<?php

namespace DesignPatterns\Behavioral\Visitor;

use DesignPatterns\Behavioral\Visitor\example1\Group;
use DesignPatterns\Behavioral\Visitor\example1\Role;
use DesignPatterns\Behavioral\Visitor\example1\RoleVisitor;
use DesignPatterns\Behavioral\Visitor\example1\User;
use PHPUnit\Framework\TestCase;

/**
 * Class Example1Test
 * @package DesignPatterns\Behavioral\Visitor
 */
class Example1Test extends TestCase
{
    /**
     * @var RoleVisitor
     */
    private $visitor;

    protected function setUp()
    {
        $this->visitor = new RoleVisitor();
    }

    public function provideRoles()
    {
        return [
            [new User('Dominik')],
            [new Group('Administrators')],
        ];
    }

    /**
     * @dataProvider provideRoles
     *
     * @param Role $role
     */
    public function testVisitSomeRole(Role $role)
    {
        $role->accept($this->visitor);
        $this->assertSame($role, $this->visitor->getVisited()[0]);
    }
}

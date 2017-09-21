<?php

namespace DesignPatterns\Behavioral\Visitor\example1;

/**
 * Interface RoleVisitorInterface
 * @package DesignPatterns\Behavioral\Visitor\example1
 */
interface RoleVisitorInterface
{
    public function visitUser(User $role);

    public function visitGroup(Group $role);
}

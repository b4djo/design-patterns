<?php

namespace DesignPatterns\Behavioral\Visitor\example1;

/**
 * Class RoleVisitor
 * @package DesignPatterns\Behavioral\Visitor\example1
 */
class RoleVisitor implements RoleVisitorInterface
{
    /**
     * @var Role[]
     */
    private $visited = [];

    /**
     * @param Group $role
     */
    public function visitGroup(Group $role)
    {
        $this->visited[] = $role;
    }

    /**
     * @param User $role
     */
    public function visitUser(User $role)
    {
        $this->visited[] = $role;
    }

    /**
     * @return Role[]
     */
    public function getVisited()/*: array*/
    {
        return $this->visited;
    }
}

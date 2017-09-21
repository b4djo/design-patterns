<?php

namespace DesignPatterns\Behavioral\Visitor\example1;

/**
 * Class Role
 * @package DesignPatterns\Behavioral\Visitor\example1
 */
interface Role
{
    public function accept(RoleVisitorInterface $visitor);
}

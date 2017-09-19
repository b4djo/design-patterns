<?php

namespace DesignPatterns\Behavioral\Specification;

/**
 * Interface UserSpecificationInterface
 * @package DesignPatterns\Behavioral\Specification
 */
interface UserSpecificationInterface
{
    /**
     * @param User $user
     *
     * @return bool
     */
    public function isSatisfiedBy(User $user)/*: bool*/;
}

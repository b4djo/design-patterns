<?php

namespace DesignPatterns\Behavioral\Specification;

/**
 * Class UserCompanySpecification
 * @package DesignPatterns\Behavioral\Specification
 */
class UserCompanySpecification implements UserSpecificationInterface
{
    /**
     * @var string
     */
    private $companyName;

    /**
     * UserCompanySpecification constructor.
     *
     * @param string $companyName
     */
    public function __construct(string $companyName)
    {
        $this->companyName = $companyName;
    }

    /**
     * @param User $user
     *
     * @return bool
     */
    public function isSatisfiedBy(User $user)/*: bool*/
    {
        if ($user->company === $this->companyName) {
            return true;
        }

        return false;
    }
}

<?php

namespace DesignPatterns\Behavioral\Observer\example1;

/**
 * Class UserObserver
 * @package DesignPatterns\Behavioral\Observer\example1
 */
class UserObserver implements \SplObserver
{
    /**
     * @var User[]
     */
    private $changedUsers = [];

    /**
     * It is called by the Subject, usually by SplSubject::notify()
     *
     * @param \SplSubject $subject
     */
    public function update(\SplSubject $subject)
    {
        $this->changedUsers[] = clone $subject;
    }

    /**
     * @return User[]
     */
    public function getChangedUsers()/*: array*/
    {
        return $this->changedUsers;
    }
}

<?php

namespace DesignPatterns\Tests\Behavioral\Observer;

use DesignPatterns\Behavioral\Observer\example1\User;
use DesignPatterns\Behavioral\Observer\example1\UserObserver;
use PHPUnit\Framework\TestCase;

/**
 * Class Example1Test
 * @package DesignPatterns\Tests\Behavioral\Observer
 */
class Example1Test extends TestCase
{
    public function testChangeInUserLeadsToUserObserverBeingNotified()
    {
        $observer = new UserObserver();

        $user = new User();
        $user->attach($observer);

        $user->changeEmail('foo@bar.com');
        $this->assertCount(1, $observer->getChangedUsers());
    }
}

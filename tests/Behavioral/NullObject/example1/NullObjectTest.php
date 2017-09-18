<?php

namespace DesignPatterns\Tests\Behavioral\example1;

use DesignPatterns\Behavioral\NullObject\example1\UserFactory;
use PHPUnit\Framework\TestCase;

/**
 * Class NullObjectTest
 * @package DesignPatterns\Tests\Behavioral\example1
 */
class NullObjectTest extends TestCase
{
    public function testNullObject()
    {
        $userFactory = new UserFactory();

        $user2 = $userFactory->getUser('User 2');
        $user4 = $userFactory->getUser('User 4');

        $this->assertEquals('Anonymous user', $user2->getName());
        $this->assertEquals('Anonymous user', $user4->getName());
    }

    public function testUserObject()
    {
        $userFactory = new UserFactory();

        $user1 = $userFactory->getUser('User 1');
        $user3 = $userFactory->getUser('User 3');
        $user5 = $userFactory->getUser('User 5');

        $this->assertEquals('User 1', $user1->getName());
        $this->assertEquals('User 3', $user3->getName());
        $this->assertEquals('User 5', $user5->getName());
    }
}

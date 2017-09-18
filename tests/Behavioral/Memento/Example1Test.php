<?php

namespace DesignPatterns\Tests\Behavioral\Memento;

use DesignPatterns\Behavioral\Memento\example1\State;
use DesignPatterns\Behavioral\Memento\example1\Ticket;
use PHPUnit\Framework\TestCase;

/**
 * Class MementoTest
 * @package Behavioral
 */
class Example1Test extends TestCase
{
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        require_once __DIR__ . '/../../../vendor/autoload.php';
    }

    public function testOpenTicketAssignAndSetBackToOpen()
    {
        $ticket = new Ticket();

        // Open the ticket
        $ticket->open();
        $openedState = $ticket->getState();
        $this->assertEquals(State::STATE_OPENED, (string)$ticket->getState());

        $memento = $ticket->saveToMemento();

        // Assign to ticket
        $ticket->assign();
        $this->assertEquals(State::STATE_ASSIGNED, (string)$ticket->getState());

        // Now restore to the opened state, but verify that the state object has been cloned for the memento
        $ticket->restoreFromMemento($memento);

        $this->assertEquals(State::STATE_OPENED, (string)$ticket->getState());
        $this->assertNotSame($openedState, $ticket->getState());
    }
}

<?php

namespace DesignPatterns\Tests\Behavioral\Memento;

use DesignPatterns\Behavioral\Memento\example2\Editor;
use PHPUnit\Framework\TestCase;

/**
 * Class MementoTest
 * @package Behavioral
 */
class Example2Test extends TestCase
{
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        require_once __DIR__ . '/../../../vendor/autoload.php';
    }

    public function testOpenTicketAssignAndSetBackToOpen()
    {
        $editor = new Editor();

        $editor->typing('Some one text.');
        $editor->typing('Some two text.');

        // Saving state
        $saved = $editor->save();

        $editor->typing('Some three text.');

        $this->assertEquals('Some one text.Some two text.Some three text.', $editor->getContent());

        $editor->restore($saved);
        $this->assertEquals('Some one text.Some two text.', $editor->getContent());
    }
}

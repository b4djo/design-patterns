<?php

namespace DesignPatterns\Structural\Composite\Tests;

use DesignPatterns\Structural\Composite;
use PHPUnit\Framework\TestCase;

/**
 * Class Example1Test
 * @package DesignPatterns\Structural\Composite\Tests
 */
class Example1Test extends TestCase
{
    public function testRender()
    {

        $form = new Composite\Example1\Form();
        $form->addElement(new Composite\Example1\TextElement('Email:'));
        $form->addElement(new Composite\Example1\InputElement());
        $embed = new Composite\Example1\Form();
        $embed->addElement(new Composite\Example1\TextElement('Password:'));
        $embed->addElement(new Composite\Example1\InputElement());
        $form->addElement($embed);

        // This is just an example, in a real world scenario it is important to remember that web browsers do not
        // currently support nested forms

        $this->assertSame(
            '<form>Email:<input type="text" /><form>Password:<input type="text" /></form></form>',
            $form->render()
        );
    }

    /*public function testRender2()
    {
        $form = new Composite\Example1\Form();
        $select = new Composite\Example1\SelectElement();

        $select->addOption(new Composite\Example1\OptionElement(1, 'One'));
        $select->addOption(new Composite\Example1\OptionElement(2, 'Two'));
        $select->addOption(new Composite\Example1\OptionElement(3, 'Three'));

        $form->addElement($select);
        $form->render();
    }*/
}

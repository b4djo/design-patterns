<?php

namespace DesignPatterns\Structural\Composite\Example1;

/**
 * Class Form
 * @package DesignPatterns\Structural\Composite
 */
class Form implements RenderInterface
{
    /**
     * @var RenderInterface[]
     */
    private $elements;

    public function render(): string
    {
        $form = '<form>';

        foreach ($this->elements as $element) {
            $form .= $element->render();
        }

        $form .= '</form>';

        return $form;
    }

    public function addElement(RenderInterface $element)
    {
        $this->elements[] = $element;
    }
}

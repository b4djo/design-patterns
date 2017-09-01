<?php

namespace DesignPatterns\Structural\Composite;

/**
 * Class SelectElement
 * @package DesignPatterns\Structural\Composite
 */
class SelectElement implements RenderInterface
{
    /**
     * @var RenderInterface[]
     */
    private $options;

    public function render(): string
    {
        $select = '<select>';

        foreach ($this->options as $option) {
            $select .= $option->render();
        }

        $select .= '</select>';

        return $select;
    }

    public function addOption(RenderInterface $option)
    {
        $this->options[] = $option;
    }
}

<?php

namespace DesignPatterns\Structural\Composite\Example1;

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

    /**
     * @return string
     */
    public function render(): string
    {
        $select = '<select>';

        foreach ($this->options as $option) {
            $select .= $option->render();
        }

        $select .= '</select>';

        return $select;
    }

    /**
     * @param RenderInterface $option
     */
    public function addOption(RenderInterface $option)
    {
        $this->options[] = $option;
    }
}

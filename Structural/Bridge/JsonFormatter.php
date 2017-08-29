<?php

namespace DesignPatterns\Structural\Bridge;

/**
 * Class JsonFormatter
 * @package DesignPatterns\Structural\Bridge
 */
class JsonFormatter implements FormatterInterface {
    
    public function format(string $text)
    {
        return json_encode($text);
    }
}

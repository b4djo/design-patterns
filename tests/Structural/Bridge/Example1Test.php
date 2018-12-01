<?php

namespace Structural\Bridge;

use DesignPatterns\Structural\Bridge\HelloWordService;
use DesignPatterns\Structural\Bridge\HtmlFormatter;
use DesignPatterns\Structural\Bridge\PlainTextFormatter;
use PHPUnit\Framework\TestCase;

/**
 * Class BridgeTest
 * @package Structural\Bridge
 */
class BridgeTest extends TestCase
{
    public function testCanPrintUsingThePlainTextFormatter()
    {
        $service = new HelloWordService(new PlainTextFormatter());

        $this->assertSame('Hello world', $service->get());
    }

    public function testCanPrintUsingTheHtmlFormatter()
    {
        $service = new HelloWordService(new HtmlFormatter());

        $this->assertSame('<p>Hello world</p>', $service->get());
    }
}

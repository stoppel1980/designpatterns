<?php

namespace App\Tests\Patterns\Decorator\Unit;

use App\Patterns\Decorator\HtmlElement;
use PHPUnit\Framework\TestCase;

class HtmlElementTest extends TestCase
{

    /** @test **/
    public function itCreatesAHtmlElement(): void
    {
        $element = new HtmlElement("hello world");

        $this->assertEquals("hello world", $element->execute());
    }
}
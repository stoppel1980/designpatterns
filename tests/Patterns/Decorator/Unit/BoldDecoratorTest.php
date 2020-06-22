<?php

namespace App\Tests\Patterns\Decorator\Unit;

use App\Patterns\Decorator\BoldDecorator;
use App\Patterns\Decorator\HtmlElement;
use PHPUnit\Framework\TestCase;

class BoldDecoratorTest extends TestCase
{
    /** @test */
    public function itMakesAStringBold(): void
    {
        $html = new HtmlElement("hello world");
        $html = new BoldDecorator($html);

        $this->assertEquals("<b>hello world</b>", $html->execute());
    }

}
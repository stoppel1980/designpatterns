<?php


namespace App\Tests\Patterns\Decorator\Unit;


use App\Patterns\Decorator\HtmlElement;
use App\Patterns\Decorator\ItalicDecorator;
use PHPUnit\Framework\TestCase;

class ItalicDecoratorTest extends TestCase
{

    /** @test */
    public function itMakesAStringItalic(): void
    {
        $html = new HtmlElement("hello world");

        $html = new ItalicDecorator($html);

        $this->assertEquals("<i>hello world</i>", $html->execute());
    }
}
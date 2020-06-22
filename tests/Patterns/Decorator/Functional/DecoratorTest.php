<?php

namespace App\Tests\Patterns\Decorator\Functional;

use App\Patterns\Decorator\BoldDecorator;
use App\Patterns\Decorator\HtmlElement;
use App\Patterns\Decorator\ItalicDecorator;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{

    /** @test */
    public function aStringCanBeDecorated(): void
    {
        $stringElement = new HtmlElement("example string");
        $stringElement = new ItalicDecorator($stringElement);

        $this->assertEquals('<i>example string</i>', $stringElement->execute());
    }

    /** @test */
    public function aStringCanBeDecoratedMultipleTimes(): void
    {
        $stringElement = new HtmlElement("example string");
        $stringElement = new ItalicDecorator($stringElement);
        $stringElement = new BoldDecorator($stringElement);

        $this->assertEquals('<b><i>example string</i></b>', $stringElement->execute());
    }
}
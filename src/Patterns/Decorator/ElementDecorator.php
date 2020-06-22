<?php

namespace App\Patterns\Decorator;

abstract class ElementDecorator implements HtmlElementInterface
{
    protected HtmlElementInterface $html;

    public function execute(): string
    {
        return $this->html->execute();
    }
}
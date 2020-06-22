<?php

namespace App\Patterns\Decorator;

class BoldDecorator extends ElementDecorator
{
    public function __construct(HtmlElementInterface $htmlElement)
    {
        $this->html = $htmlElement;
    }

    public function execute(): string
    {
        return '<b>' . parent::execute() . '</b>';
    }
}
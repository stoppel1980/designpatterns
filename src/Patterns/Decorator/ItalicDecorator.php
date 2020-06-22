<?php


namespace App\Patterns\Decorator;


class ItalicDecorator extends ElementDecorator
{
    public function __construct(HtmlElementInterface $htmlElement)
    {
        $this->html = $htmlElement;
    }

    public function execute(): string
    {
        return '<i>' . parent::execute() . '</i>';
    }
}
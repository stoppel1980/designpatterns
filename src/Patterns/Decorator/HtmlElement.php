<?php


namespace App\Patterns\Decorator;


class HtmlElement implements HtmlElementInterface
{
    private string $html;

    public function __construct(string $html)
    {
        $this->html = $html;
    }

    public function execute(): string
    {
        return $this->html;
    }

}
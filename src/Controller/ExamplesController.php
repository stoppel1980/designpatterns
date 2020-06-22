<?php

namespace App\Controller;

use App\Patterns\Decorator\BoldDecorator;
use App\Patterns\Decorator\HtmlElement;
use App\Patterns\Decorator\ItalicDecorator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ExamplesController
{
    public function decorator(Request $request): Response
    {

        $decoratedHtml = new HtmlElement('i-am-alive');
        $decoratedHtml = new ItalicDecorator($decoratedHtml);
        $decoratedHtml = new BoldDecorator($decoratedHtml);


        return new Response($decoratedHtml->execute(), 200);
    }
}


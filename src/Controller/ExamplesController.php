<?php

namespace App\Controller;

use App\Patterns\Builder\WithChaining\UserBuilder;
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

    public function builderWithChaining(Request $request): Response
    {
        $builder = new UserBuilder();
        $liteUser = $builder->username('douwe')->build();
        $fullUser = $builder->username('marieke')
                            ->password('itsasecret')
                            ->avatarUrl('https://lumiere-a.akamaihd.net/v1/images/ct_disneyprincess_moana_17699_870f1562.jpeg?region=0,0,1125,600')
                            ->build();

        $response = '<h2>Lite user</h2><pre>' . json_encode($liteUser) . '</pre>';
        $response .= '<h2>Full user</h2><pre>' . json_encode($fullUser) .'</pre>';

        return new Response($response);
    }
}


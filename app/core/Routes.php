<?php

    use elevenstack\expressphp\Express as express;

    $app = new express();

    $app->type_aplication('web');
    $app->namespace('app/controller/');

    $app->get('/', 'HomeController:index');

    $app->error($app->getRoute_request(), function($res){
        $res['send']('Página não encontrada');
    });
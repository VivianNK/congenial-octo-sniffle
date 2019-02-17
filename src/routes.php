<?php

use Slim\Http\Request;
use Slim\Http\Response;

$app->group('/spotify', function () use ($app) {

    $app->get('/auth', function (Request $request, Response $response) {
        $code = $request->getAttribute("code");

        $authentication = new \Palm\Spotify\Authenticate();
        $user = $authentication->authenticate($code);
        return $response->write($user);
    });

    $app->get('/playlist', function (Request $request, Response $response) {

    });

    $app->get('/user/playlists', function (Request $request, Response $response) {

    });
});

$app->get('/playlist/location', function (Request $request, Response $response) {

});

$app->post('/playlist/location', function (Request $request, Response $response) {

});

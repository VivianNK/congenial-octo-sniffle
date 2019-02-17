<?php

use Slim\Http\Request;
use Slim\Http\Response;

$app->group('/spotify', function () use ($app) {

    $app->get('/auth', function (Request $request, Response $response) use ($app) {
        $code = $request->getParam("code");

        $authentication = new \Palm\Spotify\Authenticate();
        if ($code) {
            $token = $authentication->authenticate($code);
            return $response->write(json_encode($token));
        } else {
            $header = $authentication->authenticate();
            return $response->withHeader("Location", $header);
        }

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

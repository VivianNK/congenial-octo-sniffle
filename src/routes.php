<?php

use Slim\Http\Request;
use Slim\Http\Response;

// GET Request
$app->get('/', function (Request $request, Response $response) {
    return $response->write("Hello World!");
});

// POST Request
$app->post('/', function (Request $request, Response $response) {
    return $response->write("Got a POST request at /");
});

// PUT Request
$app->put('/', function (Request $request, Response $response) {
    return $response->write("Got a PUT request at /");
});

// DELETE Request
$app->delete('/', function (Request $request, Response $response) {
    return $response->write("Got a DELETE request at /");
});

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

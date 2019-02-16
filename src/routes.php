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

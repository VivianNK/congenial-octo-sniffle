<?php

$autoLoader = require_once 'vendor/autoload.php';

// Instantiate the app
$app = new \Slim\App();

// Get Secrets
require_once 'inc/config.php';

// Register routes
require_once 'src/routes.php';

// Resister classes
require_once 'src/Spotify/API.php';
require_once 'src/Spotify/Session.php';
require_once 'src/Spotify/Authenticate.php';

// Run app
$app->run();

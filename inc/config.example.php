<?php

$get_data = function (&$var, $default = null) {
    return !empty($var) ? $var : $default;
};

/* *
 * *    Database configuration
 * */
@define("DB_NAME", $get_data(getenv("DB_NAME"), 'spotify'));
@define("DB_USER", $get_data(getenv("DB_USER"), 'spotify'));
@define("DB_PASSWORD", $get_data(getenv("DB_PASSWORD"), 'password'));
@define("DB_HOST", $get_data(getenv("DB_HOST"), 'localhost'));
@define("DB_DRIVER", $get_data(getenv("DB_DRIVER"), 'pdo_mysql'));

/* *
 * *    Spotify Authentication
 * */
@define("CLIENT_ID", $get_data(getenv("CLIENT_ID"), ''));
@define("CLIENT_SECRET", $get_data(getenv("CLIENT_SECRET"), ''));
@define("REDIRECT_URI", $get_data(getenv("REDIRECT_URI"), 'localhost:3000'));

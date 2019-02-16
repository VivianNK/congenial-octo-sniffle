<?php

namespace Palm\Spotify;


class Authenticate
{

    private $session;
    private $api;

    /**
     * Authenticate constructor.
     *
     */
    public function __construct()
    {
        $this->session = new Session();
        $this->api = new API();
    }

    public function authenticate($code)
    {
        $this->session->requestAccessToken($code);
        $this->api->setAccessToken($this->session->getAccessToken());

        return $this->api->me();
    }
}

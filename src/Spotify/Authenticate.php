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

    public function authenticate($code = null)
    {
        if (!is_null($code)) {
            $this->session->requestAccessToken($code);
            //TODO: Store in Database

            return $this->session->getAccessToken();
        } else {
            $options = [
                'scope' => [
                    'user-read-email',
                ],
            ];

            return $this->session->getAuthorizeUrl($options);
        }
    }
}

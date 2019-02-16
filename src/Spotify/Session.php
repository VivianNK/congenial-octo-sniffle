<?php

namespace Palm\Spotify;

use SpotifyWebAPI\Request;

class Session extends \SpotifyWebAPI\Session
{

    /**
     * Session constructor.
     *
     * @param Request|null $request
     */
    public function __construct(Request $request = null)
    {
        parent::__construct(
            CLIENT_ID,
            CLIENT_SECRET,
            REDIRECT_URI,
            $request
        );
    }
}

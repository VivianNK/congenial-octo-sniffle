<?php

namespace Palm\Spotify;

use SpotifyWebAPI\Request;
use SpotifyWebAPI\SpotifyWebAPI;

class API extends SpotifyWebAPI
{
    /**
     * API constructor.
     *
     * @param Request|null $request
     */
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
    }
}

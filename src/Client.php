<?php

namespace Riotgames\Api;

use GuzzleHttp\Client as GuzzleClient;

/**
 * @see https://developer.riotgames.com/
 */
class Client
{
    private $baseUri = 'https://na1.api.riotgames.com';

    public function __construct($apiKey)
    {
        $this->client = new GuzzleClient();
    }
}

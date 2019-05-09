<?php

namespace Riotgames\Api;

use GuzzleHttp\Client as GuzzleClient;

/**
 * @see https://developer.riotgames.com/
 */
class Client
{
    private $baseUri = 'https://na1.api.riotgames.com';

    private $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
        $this->client = new GuzzleClient();
    }
}

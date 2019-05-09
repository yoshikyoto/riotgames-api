<?php

namespace Yoshikyoto\Riotgames\Api;

use GuzzleHttp\Client as GuzzleClient;

/**
 * @see https://developer.riotgames.com/
 */
class Client
{
    use \Yoshikyoto\Riotgames\Api\Summoner\SummonerV4;

    private $baseUri = 'https://na1.api.riotgames.com';

    private $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
        $this->client = new GuzzleClient();
    }
}

<?php

namespace Yoshikyoto\Riotgames\Api;

use GuzzleHttp\Client as GuzzleClient;

/**
 * @see https://developer.riotgames.com/
 */
class Client
{
    use \Yoshikyoto\Riotgames\Api\Summoner\SummonerV4;

    /**
     * @var string
     */
    private $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
        $this->client = new GuzzleClient([
            'base_uri' => 'https://jp1.api.riotgames.com',
        ]);
    }

    public function get($path, $headers = []): array
    {
        $headers['X-Riot-Token'] = $this->apiKey;
        $response = $this->client->get($path, [
            'headers' => $headers,
        ]);
        return json_decode($response->getBody(), true);
    }
}

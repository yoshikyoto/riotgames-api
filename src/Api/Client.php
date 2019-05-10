<?php

namespace Yoshikyoto\Riotgames\Api;

use GuzzleHttp\Client as GuzzleClient;

/**
 * @see https://developer.riotgames.com/
 */
class Client
{
    use \Yoshikyoto\Riotgames\Api\Summoner\SummonerV4;
    use \Yoshikyoto\Riotgames\Api\ChampionMastery\ChampionMasteryV4;
    use \Yoshikyoto\Riotgames\Api\Ddragon\Versions;
    use \Yoshikyoto\Riotgames\Api\Ddragon\Champions;

    /**
     * @var string
     */
    private $apiKey;

    private $client;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
        $this->client = new GuzzleClient();
    }

    protected function get($path, $headers = []): array
    {
        $headers['X-Riot-Token'] = $this->apiKey;
        $response = $this->client->get('https://jp1.api.riotgames.com' . $path, [
            'headers' => $headers,
        ]);
        return json_decode($response->getBody(), true);
    }

    protected function getDdragon($path, $headers = []): array
    {
        $response = $this->client->get('https://ddragon.leagueoflegends.com' . $path, [
            'headers' => $headers,
        ]);
        return json_decode($response->getBody(), true);
    }
}

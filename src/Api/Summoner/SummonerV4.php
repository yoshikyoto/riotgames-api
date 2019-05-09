<?php

namespace Yoshikyoto\Riotgames\Api\Summoner;

/**
 * @see https://developer.riotgames.com/api-methods/#summoner-v4/GET_getBySummonerName
 */
trait SummonerV4
{
    public function getSummoner($summonerName)
    {
        $path = "/lol/summoner/v4/summoners/by-name/{$summonerName}";
        $this->get($path);
    }
}

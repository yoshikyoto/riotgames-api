<?php

namespace Yoshikyoto\Riotgames\Api\Summoner;

use Yoshikyoto\Riotgames\Model\Factory;

/**
 * @see https://developer.riotgames.com/api-methods/#summoner-v4/GET_getBySummonerName
 */
trait SummonerV4
{
    public function getSummoner($summonerName)
    {
        $path = "/lol/summoner/v4/summoners/by-name/{$summonerName}";
        $array = $this->get($path);
        return Factory::createSummoner($array);
    }
}

<?php

namespace Yoshikyoto\Riotgames\Api\ChampionMastery;

use Yoshikyoto\Riotgames\Model\Factory;

/**
 * @see https://developer.riotgames.com/api-methods/#champion-mastery-v4/GET_getAllChampionMasteries
 */
trait ChampionMasteryV4
{
    public function getChampionMastery($summonerId)
    {
        $path = "/lol/champion-mastery/v4/champion-masteries/by-summoner/{$summonerId}";
        $array = $this->get($path);
        return Factory::createChampionMasteries($array);
    }
}

<?php

namespace Yoshikyoto\Riotgames\Api\Ddragon;

use Yoshikyoto\Riotgames\Model\Factory;

/**
 * @see https://developer.riotgames.com/api-methods/#champion-mastery-v4/GET_getAllChampionMasteries
 */
trait Champions
{
    public function getChampions(
        string $version,
        string $language
    ) {
        $path = "/cdn/{$version}/data/{$language}/champion.json";
        $array = $this->getDdragon($path);
        return Factory::champions($array['data']);
    }
}

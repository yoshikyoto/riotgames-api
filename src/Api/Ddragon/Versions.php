<?php

namespace Yoshikyoto\Riotgames\Api\Ddragon;

use Yoshikyoto\Riotgames\Model\Factory;

/**
 * @see https://developer.riotgames.com/api-methods/#champion-mastery-v4/GET_getAllChampionMasteries
 */
trait Versions
{
    public function getVersions()
    {
        $path = "/api/versions.json";
        $array = $this->getDdragon($path);
        return $array;
    }

    protected function isValidAsSemanticVersion($version)
    {
        return preg_match('/^[0-9]+\.[0-9]+\.[0-9]+$/u', $version) === 1;
    }
}

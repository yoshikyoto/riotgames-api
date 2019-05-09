<?php

namespace Yoshikyoto\Riotgames\Model;

class Factory
{
    public static function createSummoner(array $array): Summoner
    {
        return new Summoner(
            $array['profileIconId'],
            $array['name'],
            $array['puuid'],
            $array['summonerLevel'],
            $array['revisionDate'],
            $array['id'],
            $array['accountId']
        );
    }
}

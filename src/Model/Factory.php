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

    /**
     * @param array $array
     * @return ChampionMastery[]
     */
    public static function createChampionMasteries(array $array): array
    {
        return array_map(function ($item) {
            return static::createChampionMastery($item);
        }, $array);
    }

    public static function createChampionMastery(array $array): ChampionMastery
    {
        return new ChampionMastery(
            $array['chestGranted'],
            $array['championLevel'],
            $array['championPoints'],
            $array['championId'],
            $array['championPointsUntilNextLevel'],
            $array['lastPlayTime'],
            $array['tokensEarned'],
            $array['championPointsSinceLastLevel'],
            $array['summonerId']
        );
    }
}

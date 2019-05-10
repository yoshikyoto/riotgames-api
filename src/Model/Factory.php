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

    public static function champions(array $array): array
    {
        return array_map(function ($item) {
            return static::champion($item);
        }, $array);
    }

    public static function champion(array $array): Champion
    {
        return new Champion(
            $array['id'],
            $array['key'],
            $array['name'],
            $array['title'],
            $array['blurb'],
            static::championImage($array['image'])
        );
    }

    public static function championImage(array $array): ChampionImage
    {
        return new ChampionImage(
            $array['full'],
            $array['sprite'],
            $array['group'],
            $array['x'],
            $array['y'],
            $array['w'],
            $array['h']
        );
    }
}

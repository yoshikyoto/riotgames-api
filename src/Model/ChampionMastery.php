<?php

namespace Yoshikyoto\Riotgames\Model;

class ChampionMastery
{

    private $chestGranted;

    private $championLevel;

    private $championPoints;

    private $championId;

    private $championPointsUntilNextLevel;

    private $lastPlayTime;

    private $tokensEarned;

    private $championPointsSinceLastLevel;

    private $summonerId;

    public function __construct(
        bool $chestGranted,
        int $championLevel,
        int $championPoints,
        int $championId,
        int $championPointsUntilNextLevel,
        int $lastPlayTime,
        int $tokensEarned,
        int $championPointsSinceLastLevel,
        string $summonerId
    ) {
        $this->chestGranted = $chestGranted;
        $this->championLevel = $championLevel;
        $this->championPoints = $championPoints;
        $this->championId = $championId;
        $this->championPointsUntilNextLevel = $championPointsUntilNextLevel;
        $this->lastPlayTime = $lastPlayTime;
        $this->tokensEarned = $tokensEarned;
        $this->championPointsSinceLastLevel = $championPointsSinceLastLevel;
        $this->summonerId = $summonerId;
    }


    public function getChestGranted(): bool
    {
        return $this->chestGranted;
    }


    public function getChampionLevel(): int
    {
        return $this->championLevel;
    }


    public function getChampionPoints(): int
    {
        return $this->championPoints;
    }

    public function getChampionId(): int
    {
        return $this->championId;
    }


    public function getChampionPointsUntilNextLevel(): int
    {
        return $this->championPointsUntilNextLevel;
    }


    public function getLastPlayTime(): int
    {
        return $this->lastPlayTime;
    }


    public function getTokensEarned(): int
    {
        return $this->tokensEarned;
    }


    public function getChampionPointsSinceLastLevel(): int
    {
        return $this->championPointsSinceLastLevel;
    }


    public function getSummonerId(): string
    {
        return $this->summonerId;
    }
}

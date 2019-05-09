<?php

namespace Yoshikyoto\Riotgames\Model;

class Summoner
{
    private $profileIconId;

    private $name;

    private $puuid;

    private $summonerLevel;

    private $revisionDate;

    private $id;

    private $accountId;

    public function __construct(
        ProfileIconId $profileIconId,
        string $name,
        string $puuid,
        int $summonerLevel,
        int $revisionDate,
        string $id,
        string $accountId
    ) {
        $this->profileIconId = $profileIconId;
        $this->name = $name;
        $this->puuid = $puuid;
        $this->summonerLevel = $summonerLevel;
        $this->revisionDate = $revisionDate;
        $this->id = $id;
        $this->accountId = $accountId;
    }

    public function getProfileIconId(): ProfileIconId
    {
        return $this->profileIconId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPuuid(): string
    {
        return $this->puuid;
    }

    public function getSummonerLevel(): int
    {
        return $this->summonerLevel;
    }

    public function getRevisionDate(): int
    {
        return $this->revisionDate;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getAccountId(): string
    {
        return $this->accountId;
    }
}

<?php

namespace Yoshikyoto\Riotgames\Model;

class Summoner
{
    /**
     * @var int
     */
    private $profileIconId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $puuid;

    /**
     * @var int
     */
    private $summonerLevel;

    /**
     * @var int
     */
    private $revisionDate;

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $accountId;

    public function __construct(
        int $profileIconId,
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

    public function getProfileIconId(): int
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

<?php


namespace Yoshikyoto\Riotgames\Model;


class ChampionImage {

    private $full;
    private $sprite;
    private $group;
    private $x;
    private $y;
    private $w;
    private $h;

    public function __construct(
        string $full,
        string $sprite,
        string $group,
        int $x,
        int $y,
        int $w,
        int $h
    ) {
        $this->full = $full;
        $this->sprite = $sprite;
        $this->group = $group;
        $this->x = $x;
        $this->y = $y;
        $this->w = $w;
        $this->h = $h;
    }

    public function getFull(): string
    {
        return $this->full;
    }

    public function getSprite(): string
    {
        return $this->sprite;
    }

    public function getGroup(): string
    {
        return $this->group;
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function getW(): int
    {
        return $this->w;
    }

    public function getH(): int
    {
        return $this->h;
    }
}

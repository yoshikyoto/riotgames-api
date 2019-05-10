<?php

namespace Yoshikyoto\Riotgames\Model;

class Champion
{
    private $id;
    private $key;
    private $name;
    private $title;
    private $blurb;
    private $image;

    public function __construct(
        string $id,
        string $key,
        string $name,
        string $title,
        string $blurb,
        ChampionImage $image
    ) {
        $this->id = $id;
        $this->key = $key;
        $this->name = $name;
        $this->title = $title;
        $this->blurb = $blurb;
        $this->image = $image;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getBlurb(): string
    {
        return $this->blurb;
    }

    public function getImage(): ChampionImage
    {
        return $this->image;
    }
}

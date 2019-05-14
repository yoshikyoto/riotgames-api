<?php

namespace Yoshikyoto\Riotgames\Model;

class Champion
{
    /**
     * @var string e.g. Aatrox
     */
    private $id;

    /**
     * @var string e.g. 266
     */
    private $key;

    /**
     * @var string e.g. エイトロックス
     */
    private $name;

    /**
     * @var string e.g. ダーキンの暴剣
     */
    private $title;

    /**
     * @var string
     * e.g. ヴォイドからシュリーマを守り抜いた誇り高き存在であったエイトロックスとその同胞は、...
     */
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

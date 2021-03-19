<?php

namespace App\Items;

abstract class Item
{
    protected string $name;
    protected int $quality;
    protected int $sellIn;

    const MIN_QUALITY = 0;
    
    /**
     * Create a new instance of this item
     *
     * @param string $name - name of the item
     * @param int $quality - quality of the item
     * @param int $sellIn - in how many days the item has to be sold
     */
    public function __construct(string $name, int $quality, int $sellIn)
    {
        $this->name = $name;
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    abstract public static function name(): string;

    /**
     * When a day passes, increase or decrease the quality of an item,
     * depending on how many days are left etc
     */
    public function tick(): void
    {
        $this->quality += $this->qualityChangeAmount()
            * $this->shouldIncreaseQuality()
            * ($this->isConjured() ? 2 : 1);
        $this->sellIn += 1 * $this->shouldIncreaseSellIn();

        if ($this->quality < self::MIN_QUALITY) {
            $this->quality = self::MIN_QUALITY;
        } elseif ($this->quality > $this->getMaxQuality()) {
            $this->quality = $this->getMaxQuality();
        }
    }

    /**
     * How much the quality should increase/decrease by
     *
     * @return int
     */
    protected function qualityChangeAmount(): int
    {
        return $this->sellIn <= 0 ? 2 : 1;
    }

    /**
     * Whether quality increases or decreases
     *
     * @return int - 1, 0 or -1
     */
    protected function shouldIncreaseQuality(): int
    {
        return -1;
    }

    /**
     * Whether sell in days increases or decreases
     *
     * @return int - 1, 0 or -1
     */
    protected function shouldIncreaseSellIn(): int
    {
        return -1;
    }

    /**
     * Max quality that an item can have
     *
     * @return int
     */
    protected function getMaxQuality(): int
    {
        return 50;
    }

    /**
     * Whether the item starts with "Conjured", e.g "Conjured mana potion"
     * 
     * @return bool
     */
    protected function isConjured(): bool
    {
        $conjuredStr = explode(' ', $this->name)[0];

        return strtolower($conjuredStr) === 'conjured';
    }

    /* Getters and setters */

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getQuality(): int
    {
        return $this->quality;
    }

    public function setQuality(int $quality): void
    {
        $this->quality = $quality;
    }

    public function getSellIn(): int
    {
        return $this->sellIn;
    }

    public function setSellIn(string $sellIn): void
    {
        $this->sellIn = $sellIn;
    }

    public function __get($name) {
        return $this->$name;
    }
}

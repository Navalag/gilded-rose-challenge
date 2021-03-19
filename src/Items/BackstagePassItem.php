<?php

namespace App\Items;

class BackstagePassItem extends Item
{
    public static function name(): string
    {
        return 'Backstage passes to a TAFKAL80ETC concert';
    }

    protected function shouldIncreaseQuality(): int
    {
        return $this->sellIn <= 0 ? -1 : 1;
    }

    protected function qualityChangeAmount(): int
    {
        if ($this->sellIn <= 10 && $this->sellIn > 5) {
            return 2;
        } elseif ($this->sellIn <= 5 && $this->sellIn > 0) {
            return 3;
        } elseif ($this->sellIn <= 0) {
            return $this->quality;
        } else {
            return 1;
        }
    }
}

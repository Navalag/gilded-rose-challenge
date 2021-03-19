<?php

namespace App\Items;

class SulfurasItem extends Item
{
    public static function name(): string
    {
        return 'Sulfuras, Hand of Ragnaros';
    }

    protected function qualityChangeAmount(): int
    {
        return 0;
    }

    protected function shouldIncreaseSellIn(): int
    {
        return 0;
    }

    protected function getMaxQuality(): int
    {
        return 80;
    }
}

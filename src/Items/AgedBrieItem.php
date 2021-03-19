<?php

namespace App\Items;

class AgedBrieItem extends Item
{
    public static function name(): string
    {
        return 'Aged Brie';
    }

    protected function shouldIncreaseQuality(): int
    {
        return 1;
    }
}

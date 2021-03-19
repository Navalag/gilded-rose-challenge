<?php

namespace App\GildedRose;

class Brie extends NormalItem
{
    /**
     * "Aged Brie" actually increases in Quality the older it gets.
     */
    public function tick()
    {
        $this->sellIn--;
        $this->quality++;

        if ($this->sellIn <= 0) {
            $this->quality++;
        }

        if ($this->quality > 50) {
            $this->quality = 50;
        }
    }
}

<?php

namespace App\GildedRose;

class Conjured extends NormalItem
{
    /**
     * "Conjured" items degrade in Quality twice as fast as normal items.
     */
    public function tick()
    {
        $this->sellIn--;
        $this->quality -= 2;

        if ($this->sellIn <= 0 && $this->quality > 0) {
            $this->quality -= 2;
        }

        if ($this->quality < 0) {
            $this->quality = 0;
        }
    }
}

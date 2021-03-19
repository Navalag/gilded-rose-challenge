<?php

namespace App\GildedRose;

class BackstagePasses extends NormalItem
{
    /**
     * "Backstage passes", like aged brie, increases in Quality as it's SellIn value approaches;
     * Quality increases by 2 when there are 10 days or less
     * and by 3 when there are 5 days or less but Quality drops to 0 after the concert.
     */
    public function tick()
    {
        $this->quality++;

        if ($this->sellIn <= 10) {
            $this->quality++;
        }

        if ($this->sellIn <= 5) {
            $this->quality++;
        }

        if ($this->sellIn <= 0) {
            $this->quality = 0;
        }

        if ($this->quality > 50) {
            $this->quality = 50;
        }

        $this->sellIn--;
    }
}

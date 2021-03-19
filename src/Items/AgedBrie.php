<?php

namespace App\Items;

use App\InventoryItem;

class AgedBrie extends InventoryItem
{
    /**
     * {@inheritDoc}
     */
    public function tick()
    {
        $this->sellIn -= 1;

        $qualityIncrease = $this->sellIn < 0 ? 2 : 1;
        $this->quality = min($this->quality + $qualityIncrease, parent::MAX_QUALITY);
    }
}

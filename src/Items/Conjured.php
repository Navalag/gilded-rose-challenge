<?php

namespace App\Items;

use App\InventoryItem;

class Conjured extends InventoryItem
{
    /**
     * {@inheritDoc}
     */
    public function tick()
    {
        $this->sellIn -= 1;
        $this->quality = max($this->sellIn < 0 ? $this->quality - 4 : $this->quality - 2, 0);
    }
}

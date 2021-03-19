<?php

namespace App\Items;

use App\InventoryItem;

class Normal extends InventoryItem
{
    public function tick()
    {
        $this->sellIn -= 1;

        $this->quality = max($this->sellIn < 0 ? $this->quality - 2 : $this->quality - 1, 0);
    }
}

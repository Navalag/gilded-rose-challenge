<?php

namespace App\Items;

use App\InventoryItem;

class Sulfuras extends InventoryItem
{
    public function tick()
    {
        // This is a special item it never has to be sold and does not decreas in quality
    }
}

<?php

namespace App\Items;

use App\InventoryItem;

class BackstagePass extends InventoryItem
{
    /**
     * {@inheritDoc}
     */
    public function tick()
    {
        $this->sellIn -= 1;

        if ($this->sellIn < 0) {
            $quality = parent::MIN_QUALITY;
        } else {
            $quality = $this->quality + 1;

            if ($this->sellIn < 5) {
                $quality += 1;
            }

            if ($this->sellIn < 10) {
                $quality += 1;
            }
        }

        $this->quality = min($quality, parent::MAX_QUALITY);
    }
}

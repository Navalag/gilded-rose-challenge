<?php

namespace App\GildedRose;

class Sulfuras extends NormalItem
{
    /**
     * "Sulfuras", being a legendary item, never has to be sold or decreases in Quality.
     */
    public function tick()
    {
        return;
    }
}

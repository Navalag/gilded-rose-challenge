<?php

namespace App\GildedRose;

/**
 * All items have a SellIn value which denotes the number of days we have to sell the item.
 * All items have a Quality value which denotes how valuable the item is.
 * The Quality of an item is never negative.
 *
 * @package App\GildedRose
 */
class NormalItem
{
    public $quality;
    public $sellIn;

    public function __construct($quality, $sellIn)
    {
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    /**
     * At the end of each day our system lowers both values for every item.
     *
     * Once the sell by date has passed, Quality degrades twice as fast.
     */
    public function tick()
    {
        $this->sellIn--;
        $this->quality--;

        if ($this->sellIn <= 0 && $this->quality > 0) {
            $this->quality--;
        }

        if ($this->quality < 0) {
            $this->quality = 0;
        }
    }
}

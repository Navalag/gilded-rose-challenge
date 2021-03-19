<?php

namespace App;

use App\Items\BackstagePassItem;
use App\Items\BrieItem;
use App\Items\ConjuredCakeItem;
use App\Items\Item;
use App\Items\NormalItem;
use App\Items\SulfurasItem;

class GildedRose
{
    public $name;

    public $quality;

    public $sellIn;

    public function __construct($name, $quality, $sellIn)
    {
        $this->name = $name;
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    /**
     * @param string $name
     * @param int $quality
     * @param int $sellIn
     * @return Item
     */
    public static function of(string $name, int $quality, int $sellIn)
    {
        switch ($name) {
            case NormalItem::NORMAL:
                return (new NormalItem($quality, $sellIn));
            case SulfurasItem::SULFURAS:
                return (new SulfurasItem($quality, $sellIn));
            case BrieItem::BRIE:
                return (new BrieItem($quality, $sellIn));
            case BackstagePassItem::BACKSTAGE_PASS:
                return (new BackstagePassItem($quality, $sellIn));
            case ConjuredCakeItem::CONJURED_CAKE:
                return (new ConjuredCakeItem($quality, $sellIn));
        }
    }
}

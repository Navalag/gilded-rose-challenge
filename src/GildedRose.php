<?php

namespace App;

use App\Items\AgedBrieItem;
use App\Items\BackstagePassItem;
use App\Items\Item;
use App\Items\NormalItem;
use App\Items\SulfurasItem;

class GildedRose
{
    private Item $item;

    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    /**
     * Create a new instance of this class with the specified item
     *
     * @param string $itemName - name of the item
     * @param int $itemQuality - quality of the item
     * @param int $sellIn - in how many days the item has to be sold
     * @return Item
     */
    public static function of(string $itemName, int $itemQuality, int $sellIn): Item
    {
        $class = self::getItemClassByName($itemName);

        return new $class($itemName, $itemQuality, $sellIn);
    }

    private static function getItemClassByName(string $itemName): string
    {
        switch ($itemName) {
            case SulfurasItem::name():
                return SulfurasItem::class;
            case AgedBrieItem::name():
                return AgedBrieItem::class;
            case BackstagePassItem::name():
                return BackstagePassItem::class;
            case NormalItem::name():
            default:
                return NormalItem::class;
        }
    }
}

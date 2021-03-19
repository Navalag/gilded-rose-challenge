<?php

namespace App;

use App\Items\AgedBrie;
use App\Items\BackstagePass;
use App\Items\Conjured;
use App\Items\Normal;
use App\Items\Sulfuras;

class GildedRose
{
    /** @var string  */
    public $name;
    /** @var int  */
    public $quality;
    /** @var int  */
    public $sellIn;

    public function __construct(string $name, int $quality, int $sellIn)
    {
        $this->name = $name;
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    /**
     * Retrieve instance of given item
     *
     * @param $name
     * @param $quality
     * @param $sellIn
     * @return AgedBrie|BackstagePass|Conjured|Normal|Sulfuras
     */
    public static function of($name, $quality, $sellIn)
    {
        switch ($name) {
            case InventoryItemName::AGED_BRIE:
                return new AgedBrie($quality, $sellIn);
            case InventoryItemName::BACKSTAGE_PASS:
                return new BackstagePass($quality, $sellIn);
            case InventoryItemName::SULFURAS:
                return new Sulfuras($quality, $sellIn);
            case InventoryItemName::CONJURED:
                return new Conjured($quality, $sellIn);
            default:
                return new Normal($quality, $sellIn);
        }
    }
}

<?php


namespace App;


abstract class Item
{
    public $quality;

    public $sellIn;

    const LIMIT = 50;

    public function __construct($quality, $sellIn)
    {
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    public function decreaseSellIn($isSellIn)
    {
        if ($isSellIn)
            $this->sellIn--;
    }

    public function increaseQuantity()
    {
        if ($this->quality < self::LIMIT)
            $this->quality++;
    }

    abstract function tick();
}

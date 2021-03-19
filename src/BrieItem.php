<?php


namespace App;


class BrieItem extends Item
{
    const BRIE = 'Aged Brie';
    private $isSellIn = true;

    function tick()
    {
        if ($this->sellIn <= 0 && $this->quality < Item::LIMIT) {
            $this->quality++;
        }

        $this->increaseQuantity();

        $this->decreaseSellIn($this->isSellIn);
    }
}

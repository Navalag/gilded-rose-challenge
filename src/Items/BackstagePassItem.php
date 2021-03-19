<?php


namespace App\Items;


class BackstagePassItem extends Item
{
    const BACKSTAGE_PASS = 'Backstage passes to a TAFKAL80ETC concert';

    private $isSellIn = true;

    function tick()
    {
        if ($this->sellIn <= 10 && $this->quality < Item::LIMIT) {
            $this->quality++;

            if ($this->sellIn <= 5) {
                $this->quality++;
            }
        }

        $this->increaseQuantity();

        if ($this->sellIn <= 0) {
            $this->quality = 0;
        }

        $this->decreaseSellIn($this->isSellIn);
    }
}

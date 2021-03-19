<?php


namespace App\Items;


class SulfurasItem extends Item
{
    const SULFURAS = 'Sulfuras, Hand of Ragnaros';
    private $isSellIn = false;

    function tick()
    {
        $this->decreaseSellIn($this->isSellIn);
    }
}

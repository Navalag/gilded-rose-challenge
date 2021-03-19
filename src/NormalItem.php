<?php


namespace App;


class NormalItem extends Item
{
    const NORMAL = 'normal';

    private $isSellIn = true;

    function tick()
    {
        if ($this->sellIn <= 0) {
            $this->quality--;
        }

        if ($this->quality !== 0) {
            $this->quality--;
        } else {
            $this->quality = 0;
        }

        $this->decreaseSellIn($this->isSellIn);
    }
}

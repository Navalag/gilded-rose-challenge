<?php


namespace App\Items;


class ConjuredCakeItem extends Item
{
    const CONJURED_CAKE = 'Conjured Mana Cake';
    private $isSellIn = true;

    function tick()
    {
        if ($this->quality !== 0) {
            $this->quality--;
            $this->quality--;

            if ($this->sellIn <= 0) {
                $this->quality--;
                $this->quality--;
            }
        }

        $this->decreaseSellIn($this->isSellIn);
    }
}

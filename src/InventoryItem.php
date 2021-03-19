<?php

namespace App;

abstract class InventoryItem
{
    const MAX_QUALITY = 50;

    /** @var int */
    public $quality;

    /** @var int */
    public $sellIn;

    public function __construct(int $quality, int $sellIn)
    {
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    abstract public function tick();
}

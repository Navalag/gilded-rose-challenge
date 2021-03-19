<?php

namespace App;

abstract class InventoryItem
{
    const MAX_QUALITY = 50;
    const MIN_QUALITY = 0;

    /** @var int */
    public $quality;

    /** @var int */
    public $sellIn;

    public function __construct(int $quality, int $sellIn)
    {
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    /**
     * Changes properties of item if necessary
     */
    abstract public function tick();
}

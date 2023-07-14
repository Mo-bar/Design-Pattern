<?php

namespace impl;

class Electric implements \ICar
{
    private $price;

    /**
     * @param $price
     */
    public function __construct($price)
    {
        $this->price = $price;
    }

    public function calculatePrice(){
        return $this->price + 750;
    }
}
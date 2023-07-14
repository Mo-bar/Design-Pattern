<?php

namespace impl;

use ICar;

class Hybrid implements ICar
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
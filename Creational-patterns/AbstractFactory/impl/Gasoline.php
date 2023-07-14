<?php

namespace impl;
use ICar;

class Gasoline implements ICar
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
        return $this->price + $this->price*0.2 + 1000;
    }
}
<?php

use impl\Hybrid;
use impl\Gasoline;
use impl\Electric;

class CarAbstractFactory
{
    private $price;

    /**
     * @param $price
     */
    public function __construct($price)
    {
        $this->price = $price;
    }

    public function createHybrid()
    {
        return new Hybrid($this->price);
    }
    public function createElectric()
    {
        return new Electric($this->price);
    }
    public function createGasoline()
    {
        return new Gasoline($this->price);
    }

}
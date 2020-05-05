<?php
namespace Cart\Cases;
use Cart\Cart;

class PriceCase implements Criteria
{
    public function isSatisfiedBy(Cart $cart):boolean 
    {
        return ($cart->getTotalPrice()-> greaterThan(10)) ? true : false;
    }
}
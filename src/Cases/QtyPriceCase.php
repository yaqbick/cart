<?php
namespace Cart\Cases;
use Cart\Cart;

class QtyPriceCase implements Criteria
{
    public function isSatisfiedBy(Cart $cart):boolean 
    {
        return ($cart->count()>3 && $cart->getTotalPrice()-> greaterThan(10)) ? true : false;
    }
}
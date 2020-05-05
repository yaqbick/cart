<?php
namespace Cart\Cases;
use Cart\Cart;

class QtyCase implements Criteria
{
    public function isSatisfiedBy(Cart $cart):boolean 
    {
        return ($cart->count()>3) ? true : false;
    }
}
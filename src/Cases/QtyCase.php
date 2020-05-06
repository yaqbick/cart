<?php
namespace Cart\Cases;
use Cart\Cart;

class QtyCase implements Criteria
{
    public function isSatisfiedBy(Cart $cart):bool
    {
        return ($cart->count()>2) ? true : false;
    }
}
<?php
namespace Cart\Cases;
use Cart\Cart;

class QtyPriceCase implements Criteria
{
    public function isSatisfiedBy(Cart $cart):bool
    {
        return ($cart->count()>2 && ($cart->getTotalPrice()->getAmount() > 10)) ? true : false;
    }
}
<?php

namespace Cart\Cases;

use Cart\Cart;

class PriceCase implements Criteria
{
    public function isSatisfiedBy(Cart $cart): bool
    {
        return ($cart->getTotalPrice()->getAmount() > 10) ? true : false;
    }
}

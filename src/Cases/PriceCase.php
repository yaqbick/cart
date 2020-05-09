<?php

namespace Cart\Cases;

use Cart\Cart;

class PriceCase implements Criteria
{
    private $price;

    public function __construct(int $price)
    {
        $this->price = $price;
    }

    public function isSatisfiedBy(Cart $cart): bool
    {
        return $cart->getTotalPrice()->getAmount() > $this->price;
    }
}

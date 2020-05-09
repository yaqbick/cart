<?php

namespace Cart\Cases;

use Cart\Cart;

class TVCase implements Criteria
{
    public function isSatisfiedBy(Cart $cart): bool
    {
        foreach ($cart->getProducts() as $product) {
            if ('telewizor' === $product->getName()) {
                return true;
            }
        }

        return false;
    }
}

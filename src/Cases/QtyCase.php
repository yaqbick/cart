<?php

namespace Cart\Cases;

use Cart\Cart;

final class QtyCase implements Criteria
{
    public const MINUMUM_QUANTITY_TO_DISCOUNT = 4;

    public function isSatisfiedBy(Cart $cart): bool
    {
        return $cart->count() > self::MINUMUM_QUANTITY_TO_DISCOUNT; //magic number
    }
}

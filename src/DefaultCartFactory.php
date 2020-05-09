<?php

declare(strict_types=1);

namespace Cart;

final class DefaultCartFactory implements CartFactory
{
    public function create(Product ...$products): Cart
    {
        ///
        ///
        ///

        return new Cart($products);
    }
}

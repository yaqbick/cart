<?php

declare(strict_types=1);

namespace Cart;

interface CartFactory
{
    public function create(Product...$products): Cart;
}

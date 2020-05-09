<?php

declare(strict_types=1);

namespace Cart;

use Money\Money;

class StandardProduct implements Product
{
    protected $name;
    protected $price;

    public function __construct(string $name, Money $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string
    {
        return  $this->name;
    }

    public function getPrice(): Money
    {
        return $this->price;
    }
}

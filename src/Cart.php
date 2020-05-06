<?php

namespace Cart;

use Countable;
use Money\Money;

class Cart implements Countable
{
    protected $products;
    protected $totals;

    public function __construct(array $products)
    {
        $this->validate($products);
        $this->products = $products;
        $this->totals = new Money(0, $products[0]->getPrice()->getCurrency());
        $this->setTotalPrice();
    }

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
        $this->totals = $this->totals->add($product->getPrice());
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    private function setTotalPrice(): void
    {
        foreach ($this->products as $product) {
            $this->totals = $this->totals->add($product->getPrice());
        }
    }

    public function getTotalPrice(): Money
    {
        return $this->totals;
    }

    public function count(): int
    {
        return count($this->products);
    }

    public function validate(array $products): void
    {
        if (!empty($products)) {
            $previousProduct = null;
            foreach ($products as $product) {
                ($product instanceof Product) ?: die('Product '.$product.' must be instance of Product');

                if ($previousProduct) {
                    ($product->getPrice()->isSameCurrency($previousProduct->getPrice())) ?: die('Product '.$product.' and '.$previousProduct.' have different prices!');
                }
                $previousProduct = $product;
            }
        }
    }

    // ...
}

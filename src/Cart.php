<?php

namespace Cart;

use Countable;
use Money\Money;

class Cart implements Countable
{
    protected $products;
    protected $totals;

    public function __construct(Product...$products)
    {
        $this->validate($products);
        $this->products = $products;
        $this->totals = new Money(0, $products[0]->getPrice()->getCurrency());
        $this->setTotalPrice();
    }

    public function addProduct(Product $product): void
    {
        //brak walidacji waluty
        $this->products[] = $product;
        $this->totals = $this->totals->add($product->getPrice());
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function getTotalPrice(): Money
    {
        return $this->totals;
    }

    public function count(): int
    {
        return count($this->products);
    }

    private function validate(array $products): void
    {
        if (!empty($products)) {
            $previousProduct = null;
            foreach ($products as $product) {
                if ($previousProduct) {
                    if(!$product->getPrice()->isSameCurrency($previousProduct->getPrice())){
                        throw new \Exception('');
                    }
                }
                $previousProduct = $product;
            }
        }
    }

    private function setTotalPrice(): void
    {
        foreach ($this->products as $product) {
            $this->totals = $this->totals->add($product->getPrice());
        }
    }

    // ...
}

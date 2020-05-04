<?php 
namespace Cart;
use Countable;
use Money\Money;

class Cart implements Countable 
{
   protected  $products;
   protected  $totals;

   public function __construct(array $products)
   {
        $this->validate($products);
        $this->products = $products;
        $this->totals = new Money($products[0]->getPrice()->getCurrency(),0);
   }

    public function addProduct(Product $product):void
    {
        $this->products[] = $product;
    }
    
    // Zwraca łączną sumę dodanych do koszyka produktów
    public function getTotalPrice(): Money
    {
        foreach ($this->products as $product)
        {
            $this->totals->add($product->getPrice());
        }

        return $this->totals;
    }

    public function count(): int
    {
        return count($this->$products);
    }

    public function validate(array $products):void
    {
        if(!empty($products))
        {
            $previousProduct = null;
            foreach ($products as $product)
            {
                ($product instanceof Product) ? : die("Product ".$product." must be instance of Product");
        
                if($previousProduct)
                {
                    ($product->getPrice()->isSameCurrency($previousProduct->getPrice())) ? : die("Product ".$product." and ".$previousProduct." have different prices!");
                }
                $previousProduct = $product;
            }
        }
    }
    
    // ...
}
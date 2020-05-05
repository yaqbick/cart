<?php
namespace Cart\Cases;
use Cart\Cart;

class TVCase implements Criteria
{
    public function isSatisfiedBy(Cart $cart):boolean 
    {
        foreach($cart->getProducts() as $product)
        {
            if($product->getName() == 'telewizor')
            {
                break;
                return true;
            }
        }
        return false;
    }
}
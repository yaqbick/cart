<?
namespace Cart\criteria;

class Case1 implements Criteria
{
    public function isSatisfiedBy($cart):boolean 
    {
        ($cart->getTotalPrice()-> greaterThan(10)) ? true : false;
    }
}
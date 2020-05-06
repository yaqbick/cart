<?php
namespace Cart\Cases;
use Cart\Cart;

interface Criteria
{
    public function isSatisfiedBy(Cart $cart):bool;
}
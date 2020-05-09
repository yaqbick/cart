<?php

declare(strict_types=1);

namespace Cart\Cases;

use Cart\Cart;

final class AggregateCriteria implements Criteria
{
    /** @var Criteria[] */
    private $criterias;

    public function __construct(Criteria...$criterias)
    {
        foreach ($criterias as $criteria){
            $this->criterias []= $criteria;
        }
    }

    public function isSatisfiedBy(Cart $cart): bool
    {
        foreach ($this->criterias as $criteria)
        {
            if(!$criteria->isSatisfiedBy($cart)){
                return false;
            }
        }
        return true;
    }
}

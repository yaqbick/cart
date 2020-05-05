<?php

interface Criteria
{
    public function isSatisfiedBy($cart):boolean;
}
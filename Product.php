<?php

interface Product
{
    public function getName(): string;
    
    public function getPrice(): Money;
}
<?php 
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
        return  $this->name = $name;
    }
    
    public function getPrice(): Money
    {
        $this->price = $price;
    }
}
<?php

require __DIR__.'/vendor/autoload.php';
use Cart\Cart;
use Cart\StandardProduct;
use Cart\Cases\QtyCase;
use Cart\Cases\PriceCase;
use Cart\Cases\TVCase;
use Cart\Cases\QtyPriceCase;
use Money\Money;
use Cart\DefaultCartFactory;

$product1 = new StandardProduct('produkt 1', Money::EUR(10000));
// $product2 = new StandardProduct("produkt 2", Money::EUR(10000));
// $product3 = new StandardProduct("telewizor", Money::EUR(10000));
$cart = new Cart([$product1]);

$factory = new DefaultCartFactory();

$cart2 = $factory->create($product1);

// $cart->addProduct($product2);
// $cart->addProduct($product3);
$qtyCase = new QtyCase();
$priceCase = new PriceCase();
$tvCase = new TVCase();
$qtyPriceCase = new QtyPriceCase();
$criteria = [$qtyCase, $priceCase, $tvCase, $qtyPriceCase];

foreach ($criteria as $criterium) {
    if ($criterium->isSatisfiedBy($cart)) {
        $result = 'TAK';
        break;
    } else {
        $result = 'NIE';
    }
}
echo $result;

<?php

require(__DIR__.'/vendor/autoload.php');
use Cart\Cart;
use Cart\StandardProduct;
use Cart\Cases\Case1;
use Money\Money;

$product1 = new StandardProduct("produkt 1", Money::EUR(10000));
$cart = new Cart([$product1]);
$cart->addProduct($product1);
$case1 = new Case1();
$criteria = [];
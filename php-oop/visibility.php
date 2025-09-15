<?php

require_once "data/Product.php";

$product = new Product('Nasi', 10000);
$product->getName();
$product->getPrice();
var_dump($product);

$dummy = new ProductDummy('agam', 0 ); 
$dummy->info();
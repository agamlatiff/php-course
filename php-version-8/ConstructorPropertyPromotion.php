<?php

class Product
{
  // public string $id;
  // public string $name;
  // public int $price;
  // public int $quantity;


  // public function __construct(string $id, string $name, int $price, int $quantity)
  // {
  //   $this->id = $id;
  //   $this->name = $name;
  //   $this->price = $price;
  //   $this->quantity = $quantity;
  // }

  public function __construct(public string $id, public string $name, public int $price, public int $quantity)
  {
  }
}

$public = new Product("1", "Shirt", 100000, 5);

echo $public->id . PHP_EOL;

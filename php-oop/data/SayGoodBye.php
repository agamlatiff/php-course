<?php

namespace Data\traits;

trait SayGoodBye
{
  public function goodBye(?string $name): void
  {
    if (empty($name)) {
      echo "Good bye" . PHP_EOL;
    } else {
      echo "Good bye $name" . PHP_EOL;
    }
  }
}

trait SayHello
{
  public function sayHello(?string $name): void
  {
    if (empty($name)) {
      echo "Hello" . PHP_EOL;
    } else {
      echo "Hello $name" . PHP_EOL;
    }
  }
}

trait HasName {
  public string $name;
}

class Person
{
  use SayGoodBye;
  use SayHello;
  use HasName;
}
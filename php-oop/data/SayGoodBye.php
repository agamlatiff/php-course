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

trait HasName
{
  public string $name;
}

trait CanRun
{
  public abstract function run(string $name): void;
}

class ParentExtenteds
{
  public function goodBye(?string $name): void
  {
    echo "GOOD BYE $name" . PHP_EOL;
  }

  public function sayHello(?string $name): void
  {
    echo "HELLO $name" . PHP_EOL;
  }
}

trait All
{
  use SayGoodBye, HasName, SayHello, CanRun {
  // SayGoodBye as private;
  }
}

class Person extends ParentExtenteds
{
  use All;
  public function run(string $name): void
  {
    echo "CAN RUN $name" . PHP_EOL;
  }


}
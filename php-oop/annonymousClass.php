<?php
interface HelloWorldsInterface
{
  function sayHello(): void;
}



$hellowWorld = new class('badrol') implements HelloWorldsInterface {

  public string $name;

  public function __construct(string $name)
  {
    $this->name = $name;
  }

  public function sayHello(): void
  {
    echo "HELLO $this->name" . PHP_EOL;
  }
};

$hellowWorld->sayHello();
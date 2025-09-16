<?php

trait A
{
  function doA()
  {
    echo "a" . PHP_EOL;
  }

  function doB()
  {
    echo "2" . PHP_EOL;
  }
}

trait B
{
  function doA(): void
  {
    echo "a" . PHP_EOL;
  }

  function doB(): void
  {
    echo "2" . PHP_EOL;
  }
}

class Sample
{
  use A, B {
    A::doA insteadof B;
    B::doB insteadof A;
  }
}

$sample = new Sample();
$sample->doA();
$sample->doB();
<?php

class Programmer
{
  public string $name;

  public function __construct(string $name)
  {
    $this->name = $name;
  }
}

class FrontEnd extends Programmer
{
}
class BackEnd extends Programmer
{
}

class Company
{
  public Programmer $programmer;
}

function sayHelloProgrammer(Programmer $programmer)
{

  if ($programmer instanceof BackEnd) {
    echo "Hello Back end $programmer->name" . PHP_EOL;
  } else if ($programmer instanceof FrontEnd) {
    echo "Hello Front end $programmer->name" . PHP_EOL;
  } else {
    echo "Hello programmer $programmer->name" . PHP_EOL;
  }
}
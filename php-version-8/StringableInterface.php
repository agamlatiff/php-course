<?php

function sayHello (Stringable $stringable) : void {
  echo "Hello {$stringable->__tostring()}";
}

class Person {
  public function __toString()
  {
    return "Agam Latifullah";
  }
}

sayHello(new Person());
  
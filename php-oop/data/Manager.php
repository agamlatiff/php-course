<?php

class Manager
{
  var string $name;
  var string $title;
  
  public function __construct(string $name = '', string $title = 'Manager') {
    $this->name = $name;
    $this->title = $title;
  }

  function sayHello(string $name): void
  {
    echo "Hello $name, my name is  Manager $this->name" . PHP_EOL;
  }
}

class Director extends Manager
{
  
  public function __construct(string $name = '') {
    // Recommendation
    parent::__construct($name);
    
  }

  function sayHello(string $name): void
  {
    echo "Hello $name, my name is  Director $this->name" . PHP_EOL;
  }
}
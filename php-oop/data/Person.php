<?php

class Person
{
  
  const APP_VERSION = 1.0;
  const AUTHOR = 'Agam Latifullah';
  var string $name;
  var ?int $age;
  var string $hobby = 'Workout';

  function sayHello(?string $name)
  {
    if(empty($name)) {
      echo "Hello $this->name";
    } else {
      echo "Hello $name";
    }
  }
  
  function getAuthor() {
    return self::AUTHOR;
  }
  
  public function __construct(string $name, int $age){
    $this->name = $name;
    $this->age = $age;
  }
  
  function __destruct(){
    echo "Object person $this->name is destroyed" . PHP_EOL;
  } 
  
}
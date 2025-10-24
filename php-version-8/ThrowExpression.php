<?php 

function sayHello (?string $name) {
  if($name == null ) {
    throw new Exception("Not Null");
  }
  
  echo "Hello $name";
}

function sayHelloExpresion (?string $name) {
  $result = $name != null ? "Hello $name" : throw new Exception("Not Null");
  
  echo $result;
}

sayHelloExpresion("2");
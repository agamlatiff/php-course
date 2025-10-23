<?php

class Example
{
  public string|array|object|int $free;

}

$example = new Example();
$example->free = "Hello World" . PHP_EOL;
echo $example->free;



function sampleFunction (string|array  $data) : string|array {
  if (is_array($data)) {
   return ["array"];
  } else {
    return "string";
  }
} 

echo sampleFunction($example->free);

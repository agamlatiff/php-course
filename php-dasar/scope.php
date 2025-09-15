<?php

$name = "Agam";

function sayHello() {
 global $name;
  echo "Hello $name";
}

sayHello();
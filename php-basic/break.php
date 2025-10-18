<?php

$i = 1;

while($i > 0) {
  echo "data ke $i" . PHP_EOL;
  $i++;
  
  if($i > 5) {
    break;
  }
}
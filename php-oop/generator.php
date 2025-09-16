<?php

function getGenap (int $max) : Iterator {
  $array = [];
  
  for ($i = 1; $i <= $max; $i++) {
    if($i % 2 === 1) {
      yield $i;
    }
  }
}

foreach (getGenap(100) as $value) {
  echo $value . PHP_EOL;
}
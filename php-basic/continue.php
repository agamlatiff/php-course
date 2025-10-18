<?php

for ($i = 1; $i <= 100; $i++) {
  if($i % 2 !== 0) {
    continue;
  }
  
   echo "data ke $i" . PHP_EOL;
}
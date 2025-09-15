<?php

$data = array(
  'joko' => 'A',
  "andi" => 'B',
  "budi" => 'C',
  'david' => 'A',
  'donat' => 'C'
);

foreach ($data as $key => $value) {
  switch ($value) {
    case 'A':
      echo "$key anda lulus dengan nilai terbaik $value" . PHP_EOL;
      break;
    case 'B':
      echo "$key anda lulus dengan nilai cukup $value" . PHP_EOL;
      break;
      ;
    case "C":
      echo "$key anda remedial dengan nilai kurang $value" . PHP_EOL;
      break;
    default:
      echo "$key anda tidak lulus" . PHP_EOL;
      break;
  }
}


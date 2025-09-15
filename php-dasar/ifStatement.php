<?php 

$data = array(
  'joko'=>10,
  "andi"=>90,
  "budi"=>72,
);

foreach( $data as $key => $value ) {
  if($value >= 85) {
    echo "Selamat $key anda lulus dengan nilai $value" . PHP_EOL;
  } else if($value >= 70) {
    echo "$key anda lulus, tetapi tingkatkan lagi pembelajaran anda" . PHP_EOL;
  }else {
    echo "$key anda tidak lulus" . PHP_EOL;
  }
}



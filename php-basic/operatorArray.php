<?php

$first = array(
  'first_name'=>'Agam',
  // 'last_name'=>'Latifullah',
);

$second = array(
  'first_name'=> 'Joko',
  'last_name'=> 'Andi',
);

$third = $first + $second;
var_dump($third);
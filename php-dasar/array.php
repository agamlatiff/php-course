<?php

$values = array(1,2,3,4);
// var_dump($values);

$names = array('Joko', 'Kurniawan', 'Kocak', 50);
// var_dump($names);

var_dump($names[0]);
$names[0] = 'Agam';
var_dump($names[0]);

unset($names[1]);
var_dump(is_null($names[1]));

$names[] = 'David';
var_dump($names);

var_dump(count($names));


$person = array(
  'name'=> 'Agam',
  'age'=> '19',
  'goals'=> 'Machine Learning Engineer',
  'hobby'=> [
    '2016'=> 'Point Blank',
    '2020'=> 'Mobile Legends',
    '2025'=> 'Fullstack Web Development',
  ],
); 

var_dump($person);
var_dump($person['hobby']['2016']);


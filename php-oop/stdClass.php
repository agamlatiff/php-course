<?php

$data = [
  "first_name"=>"joko",
  "last_name"=>"andi",
];

$object = (object)$data;

var_dump($object);
$object->first_name = 'NANTO';
var_dump($object);
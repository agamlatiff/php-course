<?php

$name = 'agam latifullah';

echo "Name: " . $name . PHP_EOL;

$conversiToString = (string)200;
var_dump( $conversiToString );

$conversiToInteger = (int)'100';
var_dump( $conversiToInteger );

echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;

echo "Hello {$name}'s" . PHP_EOL;
<?php

$name = 'Agam';
$age = 19;

echo <<<AGAM
name: $name 
age: $age
AGAM;

$contoh1 = 'TEST';
$$contoh1 = 'TEST2';

echo $TEST1;
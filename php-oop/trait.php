<?php

require_once "Data/SayGoodBye.php";

use Data\traits\{Person, sayHello, SayGoodBye};


$person = new Person();
$person->goodBye('ANDI');
$person->sayHello('JOON');
$person->name = 'DINO' . PHP_EOL;
echo $person->name;
echo $person->run('PAJERO');

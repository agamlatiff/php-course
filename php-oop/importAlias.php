<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\Conflict as Conflict1;
use Data\Two\Conflict as Conflict2;
use function Helper\helpMe as a;
use const Helper\DATA as b;

$getDataOne = new Conflict1();
$getDataTwo = new Conflict2();
a();
echo b;
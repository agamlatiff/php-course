<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\Conflict;
use function Helper\helpMe;
use const Helper\DATA;

$getDataOne = new Conflict();
$getDataTwo = new Conflict();
helpMe();
echo DATA;
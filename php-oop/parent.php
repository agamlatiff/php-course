<?php

require_once "data/Shape.php";
use Data\{Shape, Retangle};

$shape = new Data\Shape();
$retangle = new Retangle();
// $shape->getCorner();
echo $retangle->getCorner();
echo $retangle->getCorner2();
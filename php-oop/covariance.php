<?php

use Data\Cat;

require_once "data/Animal.php";
require_once "data/animalShelter.php";
require_once "data/Food.php";

$catShelter = new \Data\CatShelter();
$cat = $catShelter->adopt("Jani");
// $cat->eat(new \Data\AnimalFood());


$catShelter = new \Data\CatShelter();
$cat = $catShelter->adopt("Beni");
// $cat->eat(new \Data\Food());
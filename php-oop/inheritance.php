<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Agam";
$manager->sayHello('David');

$dircetor = new Director();
$dircetor->name = 'Orang';
$dircetor->sayHello('Manusia');
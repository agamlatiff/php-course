<?php

require_once 'data/Manager.php';

$manager = new Manager();
$manager->name = 'Nanto';
$manager->sayHello('Agam');

$dircetor = new Director();
$dircetor->name = 'Golang';
$dircetor->sayHello('Java');

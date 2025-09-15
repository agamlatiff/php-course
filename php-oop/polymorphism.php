<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer('Agam');
$company->programmer = new BackEnd('David');
$company->programmer = new FrontEnd('Kakak');
var_dump($company);

sayHelloProgrammer(new Programmer('Vito'));
sayHelloProgrammer(new BackEnd('Andi'));
sayHelloProgrammer(new FrontEnd('Jono'));
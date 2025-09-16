<?php

require_once "data/Student.php";
$student = new Student();
$student->id = '1';
$student->name = 'Agam';
$student->value = 'FULLTSTACK WEB DEVELOPER';


$student2 = new Student();
$student->id = '1';
$student->name = 'Agam';
$student->value = 'FULLTSTACK WEB DEVELOPER';
;

var_dump($student === $student2);
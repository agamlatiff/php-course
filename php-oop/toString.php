<?php

require_once "data/Student.php";

$student = new Student();
$student->id = '1';
$student->name = 'Agam';
$student->value = 'FULLTSTACK WEB DEVELOPER';

$string = (string)$student;
var_dump($string);
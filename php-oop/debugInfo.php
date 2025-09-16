<?php

require_once "data/Student.php";

$student = new Student();
$student->id = '1';
$student->name = 'Agam';
$student->value = 'FULLTSTACK WEB DEVELOPER';
$student->sample = 'E-commerce Project';

var_dump($student);
<?php

$dateTime = new DateTime();
$dateTime->setDate(1945, 8, 17 );
$dateTime->setTime(10,0,0);
$dateTime->add( new DateInterval("P1M") );
$minueOneMonth = new DateInterval("P1M");
$minueOneMonth->invert = 1;
$dateTime->add($minueOneMonth);

var_dump($dateTime);

$now = new DateTime();
$now->setTimezone(new DateTimeZone("America/Toronto"));
var_dump($now);

$string = $now->format("Y-m-d H:i:s");
echo $string;

$date = $dateTime::createFromFormat("Y-m-d H:i:s", "1945-08-17 10:00:00", new DateTimeZone('Asia/Jakarta'));
var_dump($date);


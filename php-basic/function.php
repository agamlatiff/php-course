<?php

// sayHello();

// function sayHello($name = 'unknown') {
//   // echo "Hello $name!" . PHP_EOL;
// }


// function sum(int $first, int $second) {
//   $total = $first + $second;
//   echo "total $total";
// }

// sum(1,2);

// function sumAll (...$values) {
//   $total = 0;
//   foreach($values as $value) {
//     $total += $value;
//   }

//   echo PHP_EOL . "total angka $total " . PHP_EOL;

// }

// sumAll(1,2,3,4,5,6,7,8,9,10);


// function foo () {
//   echo "FOO" . PHP_EOL;
// }

// function bar() {
//   echo "BAR". PHP_EOL;
// }

// $functionBaru = "foo";
// $functionBaru();

// function changeString(string $text, callable $filter) {
//   $result = $filter($text);
//   echo "$result";
// }

// changeString("fooD","strtoupper");

// $firstName = "Agam";
// $lastName = "Latifullah";

// $sayHello = function () use ($firstName, $lastName) {
//   echo "Hello $firstName $lastName Ganteng";
// };

// $sayHello();


// $sayHello = fn() => "Hello $firstName $lastName Ganteng";

// echo $sayHello();

/*
FUNCTION FACTORIAL LOOP
*/

function factorialLoop(int $value) {
  if($value === 1) return $value;
  
  return $value * factorialLoop($value - 1);
}

echo factorialLoop(5);
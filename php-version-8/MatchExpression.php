<?php

// $value = "A";
// $result = "";

// switch ($value) {
//   case "A";
//   case "B";
//   case "C";
//   $result = "Success";
//   case "D";
//   case "E";
//   case "F";
//   case "G";
//   "Failed";

// }

// echo $result;


// $result = match ($value) {
//   "A" => "SUCCESS",
//   "B" => "NOT BAD",
//   "C" => "NOT GOOD",
//   "E" => "FAILED",
// };

$value = 80;

$result = match(true) {
  $value > 80 => "A",
  $value > 75 => "B",
  $value > 70 => "C",
  $value > 65 => "D",
  $value > 60 => "E",
  $value > 50 => "F",
};

echo $result;


$name = "Agam Latifullah";

$resultName = match (true) {
  str_contains($name, "agam") => "NON CAPITAL",
  str_contains($name, "AGAM") => "CAPITAL",
  str_contains($name, "Agam") => "MIX",
  default => "NOT FOUND"
};

ECHO $resultName;
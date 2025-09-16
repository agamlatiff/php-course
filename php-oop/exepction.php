<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "agamlaa";
// $loginRequest->password = 'jackkk123';

try {
validateLoginRequest($loginRequest);
} catch (ValidationException |Exception $exception) {
  echo "Validation Error: {$exception->getMessage()}" . PHP_EOL;
  
  var_dump($exception->getTraceAsString());
 } finally {
  echo "AMAN AJA BROK KODE INI";
 }
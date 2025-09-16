<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = '123';
$request->password = '123';

ValidationUtil::ValidationReflection($request);
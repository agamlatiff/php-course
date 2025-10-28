<?php

$host = "localhost";
$port = 3306;
$database = "learn_php_database";
$username = "root";
$password = "root";

try {
  $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);

  echo "Success connect to database MYSQL" . PHP_EOL;
  
  $connection = null;
} catch (PDOException $error) {
  echo "Failed connect to database MYSQL" . $error->getMessage() . PHP_EOL;
}

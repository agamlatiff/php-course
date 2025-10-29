<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "admin'; #";
$password = "admin";
$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";

$prepareStatement = $connection->prepare($sql);
$prepareStatement->bindParam("username", $username);
$prepareStatement->bindParam("password", $password);
$prepareStatement->execute();

$success = false;
$find_user = null;

foreach ($prepareStatement as $row) {
  $success = true;
  $find_user = $row["username"];
}

if ($success) {
  echo "Success login: " . $find_user . PHP_EOL;
} else {
  echo "Failed login" . PHP_EOL;
}

$connection = null;

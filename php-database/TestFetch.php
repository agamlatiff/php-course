<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "atmin";
$password = "atmin";
$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";

$prepareStatement = $connection->prepare($sql);
$prepareStatement->bindParam("username", $username);
$prepareStatement->bindParam("password", $password);
$prepareStatement->execute();

if($row = $prepareStatement->fetch()) {
  echo "SUCCESS LOGIN : " . $row["username"] . PHP_EOL;
} else {
  echo "FAILED LOGIN : " . PHP_EOL; 
}

$connection = null;

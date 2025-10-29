<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email) VALUES('trying@gmail.com')");
$connection->exec("INSERT INTO comments(email) VALUES('trying@gmail.com')");
$connection->exec("INSERT INTO comments(email) VALUES('trying@gmail.com')");
$connection->exec("INSERT INTO comments(email) VALUES('trying@gmail.com')");
$connection->exec("INSERT INTO comments(email) VALUES('trying@gmail.com')");

$connection->commit();

$connection = null;


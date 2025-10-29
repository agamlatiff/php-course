<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$sql = <<<SQL
   SELECT * FROM customers;
SQL;

$connection->exec($sql);

$connection = null;
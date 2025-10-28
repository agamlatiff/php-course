<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$sql = <<<SQL
    INSERT INTO customers(id, name, email)
    VALUES ("4", "CHRIS REDFIELD", "chrisredfieldd@gmail.com");
SQL;

$connection->exec($sql);

$connection = null;
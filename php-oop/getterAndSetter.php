<?php

require_once "data/Category.php";

$category = new Category();
$category->setName("  a");
$category->setExpensive(true);

echo "Name: {$category->getName()}" . PHP_EOL;
echo "Is It Expensive? {$category->isExpensive()}" . PHP_EOL;

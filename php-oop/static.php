<?php

require_once "helper/MathHelper.php";
use Helper\MathHelper;

echo   MathHelper::$name . PHP_EOL;
echo MathHelper::sum(1,2,3,4,5);
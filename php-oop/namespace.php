<?php

namespace {
  require_once "data/Conflict.php";
  require_once "data/Helper.php";

  $data1 = new Data\One\Conflict();
  $data2 = new Data\Two\Conflict();

  echo Helper\DATA . PHP_EOL;
  echo Helper\helpMe();
}

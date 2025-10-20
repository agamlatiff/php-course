<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BussinessLogic/RemoveTodoList.php";

function viewRemoveTodoList()
{
  echo "Delete todo" . PHP_EOL;

  $pilihan = input("Nomor");

  if ($pilihan == "x") {
    echo "Exit to delete todo";
  } else {
    $success = removeTodoList($pilihan);
    if ($success) {
      echo "Success to delete $pilihan" . PHP_EOL;

    } else {
      echo "Failed to delete  $pilihan" . PHP_EOL;
    }

  }


}
<?php

require_once __DIR__ . "/../BussinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../View/ViewShowTodoList.php";
require_once __DIR__ . "/../Model/TodoList.php";



function viewShowTodoList()
{
  while (true) {
    showTodoList();

    echo "MENU" . PHP_EOL;
    echo "1. Add Todo" . PHP_EOL;
    echo "2. Remove Todo" . PHP_EOL;
    echo "x. Exit" . PHP_EOL;


    $choose = input("Choose");

    if ($choose === "1") {
      viewAddTodoList();
    } else if ($choose === "2") {
      viewRemoveTodoList();
    } else if ($choose === "x") {
      break;
    } else {
      echo "Invalid Choice" . PHP_EOL;
    }
  }
  
  echo "See you later";

}
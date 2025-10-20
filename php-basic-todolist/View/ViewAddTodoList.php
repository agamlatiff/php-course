<?php
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BussinessLogic/AddTodoList.php";
require_once __DIR__ . "/../Model/TodoList.php";


function viewAddTodoList()
{
  echo "Add Todo (x to exit)" . PHP_EOL;

  $todo = input("Todo  ");

  if ($todo == "x") {
   echo "EXIT" . PHP_EOL;
  } else {
    addTodoList($todo);
  }

}
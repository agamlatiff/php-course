<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BussinessLogic/AddTodoList.php";
require_once __DIR__ . "/../BussinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../BussinessLogic/RemoveTodoList.php";


addTodoList("Agam");
addTodoList("Latifullah");
addTodoList("Human");

showTodoList();

removeTodoList(1);

showTodoList();

$isExisting = removeTodoList(2);

if(!$isExisting) {
  echo "NOT FOUND";
} else {
  echo "SUCCESS";
}

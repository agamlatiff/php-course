<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BussinessLogic/AddTodoList.php";

addTodoList("Agam");
addTodoList("Latifullah");

var_dump($todolist);
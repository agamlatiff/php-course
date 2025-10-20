<?php

require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BussinessLogic/AddTodoList.php";
require_once __DIR__ . "/../BussinessLogic/ShowTodoList.php";

addTodoList("Agam");
addTodoList("Latifullah");
addTodoList("Human");

showTodoList();

viewRemoveTodoList();

showTodoList();

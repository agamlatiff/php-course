<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BussinessLogic/ShowTodoList.php";

$todolist[1] = "Learn PHP";
$todolist[2] = "Learn Database";
$todolist[3] = "Learn OOP";

showTodoList();

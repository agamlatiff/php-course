<?php

require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../BussinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../BussinessLogic/AddTodoList.php";

addTodoList("Agam");
addTodoList("Latifullah");
addTodoList("Human");

viewAddTodoList();
showTodoList();

viewAddTodoList();
showTodoList();
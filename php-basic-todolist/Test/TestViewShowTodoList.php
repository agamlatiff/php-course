<?php

require_once __DIR__ . "/../View/ViewShowTodoList.php";
require_once __DIR__ . "/../BussinessLogic/AddTodoList.php";

addTodoList("Agam");
addTodoList("Latifullah");
addTodoList("Human");
addTodoList("People");
viewShowTodoList();
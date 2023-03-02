<?php
require_once "../Model/TodoList.php";
require_once "../BusinessLogic/MenambahTodoList.php";

MenambahTodoList("Ibnu Rusdianto");
MenambahTodoList("Heru Rusdianto");
MenambahTodoList("Tina Rosdiani");

var_dump($data_todolist);
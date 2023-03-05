<?php
require_once __DIR__ . "../BusinessLogic/MenampilkanTodoList.php";
require_once __DIR__ . "../BusinessLogic/MenambahTodoList.php";
require_once __DIR__ . "../BusinessLogic/MenghapusTodoList.php";
require_once __DIR__ . "../BusinessLogic/Admin.php";
require_once __DIR__ . "../Helper/Input.php";
require_once __DIR__ . "../Model/TodoList.php";
require_once __DIR__ . "../View/ViewMenampilkanTodoList.php";
require_once __DIR__ . "../View/ViewMenambahTodoList.php";
require_once __DIR__ . "../View/ViewMenghapusTodoList.php";
require_once __DIR__ . "../View/ViewAdmin.php";

MenambahTodoList("Ibnu Rusdianto");
MenambahTodoList("Heru Rusdianto");
MenambahTodoList("Tina Rosdiani");
ViewMenampilkanTodoList();
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
// ini adalah function untuk menambah todolist
function MenambahTodoList (string $todo){
    global $data_todolist;

//    $data_todolist

    $number = sizeof($data_todolist) + 1;
    $data_todolist[$number] = $todo;

}
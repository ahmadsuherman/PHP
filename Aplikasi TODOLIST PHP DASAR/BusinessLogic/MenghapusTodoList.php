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
// ini adalah untuk menghapus todolist
function MenghapusTodoList (int $number): bool
{
    global $data_todolist;

    if ($number > sizeof($data_todolist)){
        return false;
    }

    // logic menggunakan perulangan
    for ($i = $number; $i < sizeof($data_todolist); $i++){
        $data_todolist[$i] = $data_todolist[$i +1];
    }

    unset($data_todolist[sizeof($data_todolist)]);
    return true;

}
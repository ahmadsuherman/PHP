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
function ViewMenambahTodoList(){
    echo "==== Silahkan isi Untuk Menambah Data =====" . PHP_EOL;

    $todo = input("Masukan Data (x jika ingin batal menambah data) ") . PHP_EOL;

    if ($todo == "x"){
        // batal atau cencel
    } else {
        MenambahTodoList($todo);
    }
}
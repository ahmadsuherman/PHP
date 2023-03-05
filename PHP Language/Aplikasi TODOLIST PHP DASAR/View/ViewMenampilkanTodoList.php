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
function ViewMenampilkanTodoList(){

    while (true){
        MenampilkanTodoList();

        echo "==== Silahkan Pilih Menu =====" . PHP_EOL;
        echo "1. Tambah Data" . PHP_EOL;
        echo "2. Hapus Data" . PHP_EOL;
        echo "3. Credits / Author" . PHP_EOL;
        echo "x. Keluar Aplikasi" . PHP_EOL;

        $menu = input("Pilih nomer ");

        if ($menu == "1"){
            ViewMenambahTodoList();
        } elseif ($menu == "2"){
            ViewMenghapusTodoList();
        } elseif ($menu == "3"){
            ViewAdmin();
        } elseif ($menu == "x"){
            break;
        } else {
            echo "Pilihan anda tidak ada di list.!" . PHP_EOL;
        }

    }

    echo "Good byee..." . PHP_EOL;
}
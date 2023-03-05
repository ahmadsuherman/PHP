<?php
require_once __DIR__ . "../BusinessLogic/MenampilkanTodoList.php";
require_once __DIR__ . "../BusinessLogic/MenambahTodoList.php";
require_once __DIR__ ."../BusinessLogic/MenghapusTodoList.php";
require_once __DIR__ . "../BusinessLogic/Admin.php";
require_once __DIR__ . "../Helper/Input.php";
require_once __DIR__ . "../Model/TodoList.php";
require_once __DIR__ . "../View/ViewMenampilkanTodoList.php";
require_once __DIR__ . "../View/ViewMenambahTodoList.php";
require_once __DIR__ . "../View/ViewMenghapusTodoList.php";
require_once __DIR__ . "../View/ViewAdmin.php";
function ViewMenghapusTodoList(){
    echo "===== Menghapus Data =====" . PHP_EOL;
    $pilihan = (int)input("Nomer yang ingin dihapus (x untuk batal) ");

    if ($pilihan == "x"){
        echo "Batal menghapus Data" . PHP_EOL;
    } else {
        $berhasil = MenghapusTodoList($pilihan);

        if ($berhasil){
            echo "Berhasil menghapus data nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus data nomer $pilihan" . PHP_EOL;
        }
    }


}
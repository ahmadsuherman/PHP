<?php

class Person{ // untuk nama class bebas sesuka kalian
    var $name;
    var $alamat;
    var $country;

    var string $nama_lengkap; // ini adalah khusus type declaration string tidak bisa ke yg lain
    var ? int $umur = null; // khusus data int - jika ingin nullable bisa
    var string $negara; //

    function menyapaOrang (string $nama){
        echo "Hello $nama" . PHP_EOL;
    }

    // this keywords for php oop
    function menyapaAyang(?string $menyapa){
        if (is_null($menyapa)){
            echo "Hi, Selamat kamu tidak bisa login {$this->$menyapa}" . PHP_EOL;
        } else {
            echo "Halo $menyapa, selamat anda bisa login {$this->$menyapa}" . PHP_EOL;
        }
    }
}
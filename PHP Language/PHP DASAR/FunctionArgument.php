<?php

// kita bisa mengirim informasi function ke yang kita panggil
function panggilSaya($nama){
    echo "Hello $nama" . PHP_EOL;
}

panggilSaya("Ibnu Rusdianto"); // maka outputnya adalah Hello Ibnu Rusdianto

// function lebih dari satu
function biodata($nama, $umur, $alamat, $nama_kampus){
    echo "Nama : $nama" . PHP_EOL;
    echo "Umur : $umur" . PHP_EOL;
    echo "Alamat : $alamat" . PHP_EOL;
    echo "Nama Kampus : $nama_kampus" . PHP_EOL;
}

biodata("Ibnu Rusdianto", 19,"Subang", "Universitas Pasundan");

// default argument value

function defaultValue($dataDefault = "Ini adalah hasil dari default"){
    echo "Hallo $dataDefault" . PHP_EOL;
}

defaultValue(); // maka ini output nya adalah hasil dari default argument value
defaultValue("Ibnu Rusdianto");

//type declaration
function hitungSUM(int $nilai1, int $nilai2){
    $total = $nilai1 + $nilai2 . PHP_EOL;
    echo "Total Hasil adalah : $total = $nilai1 + $nilai2" . PHP_EOL;
}

hitungSUM("100", "100");
hitungSUM(100, 100);
hitungSUM(true, false);
//hitungSUM([], []); => ini error
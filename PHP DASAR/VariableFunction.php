<?php

// ini adalah contoh variable function

function ibnu(){
    echo "Ibnu" . PHP_EOL;
}
function heru(){
    echo "Heru" . PHP_EOL;
}

$functionVariable = "ibnu";
$functionVariable();

$functionVariable2 = "heru";
$functionVariable2();

// contoh lain penggunaan variable function
function menyapa(string $name, $filter){
    $nama_lengkap = $filter($name);
    echo "Hello $nama_lengkap" . PHP_EOL;
}

function sample(string $name): string{
    return "Sampe $name" . PHP_EOL;
}
menyapa("Ibnu", "strtoupper");
menyapa("Ibnu", "strtolower");
<?php

// ini adalah ternary Operator

// dibawah ini bukan ternary operator

$nama = "PRIA";
$hi = null;

if ($nama == "PRIA"){
    $hi = "Hi Ibnu";
} else {
    $hi = "Hi Heru";
}

// menggunakan ternary operator
$gender = "WANITA";
$hi2 = null;

$hi2 = $gender == "WANITA" ? "Hi nona" : "Hi Bro!";
echo $hi2 . PHP_EOL;
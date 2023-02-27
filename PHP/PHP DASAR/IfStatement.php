<?php

// contoh pertama mengenai if statement

$nilai = 80; // true
$absen = 75; // true

// true dan true = true.
// false dan true = false.

if ($nilai >= 75 && $absen >= 75){
    echo "Selamat kamu lulus" . PHP_EOL;
}

// else statement
$nilai_ibnu = 60; // false
$absen_ibnu = 55; // false
if ($nilai_ibnu >= 75 && $absen_ibnu >= 75){
    echo "Selamat Kamu Lulus" . PHP_EOL; // untuk hasil ini false jadi tidak akan dimunculkan
} else {
    echo "Maaf kamu tidak lulus" . PHP_EOL; // yang dimunculkan hasilnya yaitu else (tidak lulus)
}

// elseif statement
$nilai_ibnu = 60; // false
$absen_ibnu = 55; // false
if ($nilai_ibnu >= 75 && $absen_ibnu >= 75){
    echo "Nilai kamu C" . PHP_EOL; // untuk hasil ini false jadi tidak akan dimunculkan
} elseif ($nilai_ibnu >= 80 && $absen_ibnu >= 80){
    echo "Nilai kamu B" . PHP_EOL;
} elseif ($nilai_ibnu >= 100 && $absen_ibnu >= 100){
    echo "Nilai kamu A" . PHP_EOL;
} else{
    echo "Nilai kamu E" . PHP_EOL;
}

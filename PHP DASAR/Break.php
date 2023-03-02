<?php

// ini adalah contoh kata break
// break adalah untuk menghentikan seluruh perulangan

$nilai = 1;

while (true) {
    echo "Ini adalah perulangan tanpa henti ke-$nilai" . PHP_EOL;
    $nilai++;

    if ($nilai >= 25){
        break;
    }
}
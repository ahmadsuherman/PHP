<?php

// perulangan tanpa henti (for loop)
//for (; ;){ // perulangan tanpa henti
//    echo "Hello Dunia" . PHP_EOL;
//}

// perulangan dengan kondisi
$batas_nilai = 1;
for (; $batas_nilai <= 10;){
    echo "For Loop ke - $batas_nilai" . PHP_EOL;
    $batas_nilai ++;
}

echo "========= BATAS ======" . PHP_EOL;

// perulangan dengan init statement
for ($niali = 1; $niali <= 10;){
    echo "Perulangan init statement ke - $niali" . PHP_EOL;
    $niali++;
}

echo "========= BATAS ======" . PHP_EOL;

// perulangan dengan post statement
for ($niali = 1; $niali <= 10; $niali++){
    echo "Perulangan post statement ke - $niali" . PHP_EOL;
//    $niali++;
}
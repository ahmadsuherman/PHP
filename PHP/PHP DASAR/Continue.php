<?php

// ini adalah program continue
for ($nilai = 1; $nilai <= 100; $nilai++){
    if ($nilai % 2 == 0){
        continue;
    }
    echo "Ini outputnya yaitu bilangan ganjil ke - $nilai" . PHP_EOL;
}

for ($nilai2 = 0; $nilai2 <= 100; $nilai2++){
    if ($nilai2 % 2 == 1){
        continue;
    }
    echo "Ini outputnya yaitu bilangan genap ke - $nilai" . PHP_EOL;
}
<?php

require_once "../PHP OOP/Data/Destruct.php";

$data = new Destruct();

$data->nama = "Ibnu Rusdianto";
$data->umur = 20;
$data->alamat = "Subang";
$data->nilai_ipk = 3.89;

echo "Hello {$data->nama}" . PHP_EOL;
echo "Hello {$data->umur}" . PHP_EOL;
echo "Hello {$data->alamat}" . PHP_EOL;
echo "Hello {$data->nilai_ipk}" . PHP_EOL;

echo "===== PROGRAM SELESAI =====" . PHP_EOL;

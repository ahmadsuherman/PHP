<?php

// manipulasi pertama yaitu DOT Operator

$nama = "Ibnu Rusdianto";
$kelas = 8;

echo "Nama anda $nama" . $kelas . PHP_EOL; // php_eol adalah manipulasi string

// konversi ke number dan sebaliknya
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueBoolean = (boolean) "1.2";
var_dump($valueBoolean);
<?php

//require_once "../Person.php";
require_once "../PHP OOP/Data/Person.php";

$person = new Person();

// manipulasi string
$person->name = "Ibnu Rusdianto";
$person->alamat = "Subang";
$person->country = "Indonesia";

echo "Hello {$person->name}" . PHP_EOL;
echo "Hello {$person->alamat}" . PHP_EOL;
echo "Hello {$person->country}" . PHP_EOL;

// kita bikin person baru
$person2 = new Person();
$person2->nama_lengkap = "Ibnu Rusdianto";
$person2->umur = 20;
$person2->negara = "Indonesia";

echo "Nama : {$person2->nama_lengkap}" . PHP_EOL;
echo "Umur : {$person2->umur}" . PHP_EOL;
echo "Negara : {$person2->negara}" . PHP_EOL;

//var_dump($person);
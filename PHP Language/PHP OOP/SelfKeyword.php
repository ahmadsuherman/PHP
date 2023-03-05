<?php
// require_once "PHP OOP/Data/SelfKeyword.php";
 require_once __DIR__ . "../../PHP OOP/Data/SelfKeyword.php";
//require_once __DIR__  ""

 $self = new SelfKeyword();

 $self->nama = "Ibnu Rusdianto";
 $self->alamat = "Subang";
 $self->IPK = 3.86;

 echo "Nama lengkap : {$self->nama}" . PHP_EOL;
 echo "Alamat lengkap : {$self->alamat}" . PHP_EOL;
 echo "Nilai IPK : {$self->IPK}" . PHP_EOL;

 echo "===== CREDITS FOR APLIKASI =====" . PHP_EOL;

// $panggil_self_keyword->info();
$self->info() . PHP_EOL;
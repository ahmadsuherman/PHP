<?php

$nama_depan = "Ibnu";
$nama_belakang = "Rusdianto";

$nama_lengkap = fn() => "Hello $nama_depan $nama_belakang" . PHP_EOL;

echo $nama_lengkap();
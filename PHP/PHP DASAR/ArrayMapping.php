<?php

$nama = array(
    "id" => 1,
    "nama" => "Ibnu",
    "alamat" => "Subang"
);

echo "Id Account : " . $nama["id"];
echo "Nama Account : " . $nama["nama"];
echo "Alamat : " . $nama["alamat"];

// array di dalam array
$team = [
    "id"  => 1,
    "nama_kampus" => "UNPAS",
    "alamat" => [
        "kecamat" => "Gegerkalong",
        "nama_kota" => "Bandung"
    ]
];

// bagaimana cara mengeksekusi
var_dump($team["alamat"]["nama_kota"]);

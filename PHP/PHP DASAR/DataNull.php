<?php
$nama = "Ibnu Rusdianto";
$umur = null; // berarti ini datanya null

echo "Nama anda : ";
echo "\n";
echo $nama; //karena datanya null berarti tidak akan bisa dipanggil
echo "\n";

// bagaimana untuk mengecek bahwa data itu bertipe NULL?

$alamat = NULL;
echo "Apa data alamat itu NULL?";
var_dump(is_null($alamat));

$umur = 19;
$data_null = is_null($umur);
echo $data_null; // hasilnya false or 0
var_dump($data_null);



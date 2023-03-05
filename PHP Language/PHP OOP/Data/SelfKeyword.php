<?php

class SelfKeyword
{
    var string $nama;
    var string $alamat;
    var int $umur;
    var float $IPK;

    const AUTHOR = "Ibnu Rusdianto";
    const KAMPUS = "Universitas Pasundan";
    const Jenis_Aplikasi = "Command Line (CLI)";
    const Deskripsi = "Thanks for downloading..";

    function info (){
        echo "Author : " . self::AUTHOR . PHP_EOL;
        echo "Nama Kampus : " . self::KAMPUS . PHP_EOL;
        echo "Jenis Aplikasi : " . self::Jenis_Aplikasi . PHP_EOL;
        echo "Deskripsi Aplikasi : " . self::Deskripsi . PHP_EOL;
    }
}
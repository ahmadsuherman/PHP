<?php

class Pewarisan
{
    function sayHello (string $nama) : void {
        echo "Hi $nama, Selamat datang di toko kami" . PHP_EOL;
    }
}

// untuk membuat pewarisan tinggal menggunakan extends
class Manager extends Pewarisan{

}
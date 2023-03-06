<?php

class Destruct
{
    var string $nama;
    var string $alamat;
    var int $umur;
    var float $nilai_ipk;
    function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "Object person {$this->nama} is destroyed" . PHP_EOL;
        echo "Object person {$this->alamat} is destroyed" . PHP_EOL;
        echo "Object person {$this->umur} is destroyed" . PHP_EOL;
        echo "Object person {$this->nilai_ipk} is destroyed" . PHP_EOL;
    }
}
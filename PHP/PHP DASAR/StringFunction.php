<?php

var_dump(join(",", [1,2,3,4,5])); /// join adalah untuk menggabungkan string
var_dump(explode(" ", "IBNU RUSDIANTO")); // explode untuk memecah string menjadi array
var_dump(strtoupper("ibnu rusdianto")); // mengubah ke huruf kapital
var_dump(strtolower("IBNU RUSDIANTO")); // mengubah ke lower
var_dump(trim("         ibnu        ")); // menghapus whitespace
var_dump(substr("Ibnu Rusdianto", 0,1)); // memotong
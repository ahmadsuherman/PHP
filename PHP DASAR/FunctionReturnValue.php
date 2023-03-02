<?php

function sum(int $nilai1, int $nilai2){
    return $nilai1 + $nilai2;
}

$total = sum(10,10);
var_dump($total);


function getFinalValue (int $nilai){
    if ($nilai >= 80){
        return "A";
    } elseif ($nilai >= 75){
        return "B";
    } elseif ($nilai >= 60){
        return "C";
    } else {
        return "E";
    }
}

$score = getFinalValue(20);
var_dump($score);

// return type declaration

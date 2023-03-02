<?php

$data = [10,20,30,40,50,60,70,80,90,100];

//var_dump(array_map(fn($data) => $values * 10));
$map_function = fn(int $value) => $value * 10;
$dataResult = array_map($map_function, $data);
var_dump($dataResult);

rsort($data);
var_dump($data);

var_dump(array_keys($data));
var_dump(array_values($data));
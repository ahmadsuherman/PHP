<?php


// berikut adalah contoh tanpa NullCoalscingOperator
$data = [];

if (isset($data["action"])){
    $action = $data["action"];
} else {
    $action = "Nothing";
}
echo $action . PHP_EOL;

// berikut adalah contoh menggunakan NullCoalscingOperator
$data2 = [
    "action" => "ibnu"
];

$action2 = $data ["action"] ?? "Nothing"; // ini adalah NullCoalscingOperator
echo $action2 . PHP_EOL;
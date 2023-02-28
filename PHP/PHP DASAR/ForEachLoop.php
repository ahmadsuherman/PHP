<?php

// tanpa menggunakan for each
//$names = ["Ibnu Rusdianto", "Heru Rusdianto", "Tina Rosdiani"];
//
//for ($i = 0; $names < count($names); $i++){
//    echo "Data tanpa For each $i = $names[$i]" . PHP_EOL;
//}

// menggunakan for each
//foreach ($names as $name){
//    echo "Data menggunakan for each - $name" . PHP_EOL;
//}

// For each menggunakan array mapping
$person = [
    "Ibnu Rusdianto" => "Subang",
    "Heru Rusdianto" => "Bandung",
    "Tina Rosdiani" => "Bandung"
];

foreach ($person as $orang => $value){
    echo "$orang : $value" . PHP_EOL;
}

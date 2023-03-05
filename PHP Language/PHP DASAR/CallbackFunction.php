<?php

function sayHello(string $name, callable $function){
    $finalName = call_user_func($function, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Ibnu", "strtoupper");

sayHello("Heru", function (string $name): string{
    return strtoupper($name);
});

sayHello("Tina", fn($name) => strtoupper($name));

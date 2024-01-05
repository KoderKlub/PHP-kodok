<?php

require_once "file3.php";

$number = 10;

function add(int|float $num1, int|float $num2): void {
    echo $num1 + $num2 . PHP_EOL;
}

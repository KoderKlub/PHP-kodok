<?php


$number = 10;

// pass by value
function teszt1($num){
    $num += 5;  
}

// pass by reference
function teszt2(& $num){
    $num += 5;
}

teszt1($number);  // a $number változó másolata kerül átadásra
echo $number;

echo PHP_EOL;

teszt2($number);  // a $number változó eredetije (referneciája) kerül átadásra
echo $number;

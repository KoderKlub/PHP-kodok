<?php

/*
First class functions - Első osztályú függvények:
A PHP függvények változókba menthetők.
Argumentumként adhatók át más függvényeknek.

Arrow functions - Nyíl függvények.
*/

$szamok = [1, 2, 3, 4, 5];


// function definition
function negyzet1($x){
    return $x * $x;
}


// $szamok_negyzet1 = array_map('negyzet1', $szamok);
// print_r($szamok_negyzet1);


// anonymous function - function expression
$negyzet2 = function ($x){
    return $x * $x;
};

// $szamok_negyzet2 = array_map($negyzet2, $szamok);
// print_r($szamok_negyzet2);


// arrow function
$szamok_negyzet3 = array_map(fn($x) => $x * $x, $szamok);
print_r($szamok_negyzet3);








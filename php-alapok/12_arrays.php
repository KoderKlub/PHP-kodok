<?php


/*
A tömb elemek vagy adatok gyűjteménye, amelyeket összefüggő memóriahelyeken tárolnak.
Egy tömb célja több adat együttes tárolása.
*/

$szam = 11;
$szoveg = "Hello";

$nevek = ["Andi", "Erika", "Ildiko", "Zsuzsi"];
$korok = [37, 45, 28, 49];

$regi = array("Andi", "Erika", "Ildiko", "Zsuzsi");

// append at the end
$nevek[] = "Aniko";
array_push($nevek, "Emese");

$nevek[1] = "Marika";

// print_r($nevek);
// echo $nevek[3];

// echo count($korok);
// echo array_sum($korok);

// $szamok = range(0, 10, 2);
// print_r($szamok);

// var_dump(in_array("Eniko", $nevek));

$eredeti =  ['a', 'b', 'c', 'd', 'e'];
$beillesztendo = ['x', 'y'];

array_splice($eredeti, 3, 0, $beillesztendo);
print_r($eredeti);

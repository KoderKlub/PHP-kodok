<?php

// functions - függvények


// $nevek1 = ["Andi", "Erika", "Ildiko", "Zsuzsi"];
// $nevek2 = ["Aniko", "Viola", "Erzsi", "Zsani"];


// function definition
// function koszontes($nev_tomb, $koszones="Hello"){
//     foreach ($nev_tomb as $nev){
//         echo "$koszones $nev" . PHP_EOL;
//     }
// }

// function calling
// koszontes($nevek1);
// koszontes($nevek2, "Szia");





// function definition
function osszeadas1($x, $y){
    return $x + $y;
}


// anonymous function - function expression
$osszeadas2 = function($x, $y){
    return $x + $y;
};

// function calling
$szam1 = osszeadas1(2, 5);
$szam2 = $osszeadas2(3, 54);

echo $szam1;
echo PHP_EOL;
echo $szam2;


























/*
// echo "Hello " . strtoupper($nev) . PHP_EOL;

// koszontes($nevek1);

$szamok = [1, 2, 3, 4];

function negyzet($szamok_tomb){
    foreach ($szamok_tomb as $szam){
        echo $szam * $szam . PHP_EOL;
    }
}

// negyzet($szamok);

function mat_muveletek($szam1, $szam2, $muvelet_tipus){
    // if ($muvelet_tipus == "+"){
    //     echo $szam1 + $szam2;
    // }
    switch ($muvelet_tipus){
        case "+": echo $szam1 + $szam2; break;
        case "-": echo $szam1 - $szam2; break;
        case "*": echo $szam1 * $szam2; break;
        case "/": echo $szam1 / $szam2; break;
        default: "Nem tamogatott muvelet tipus.";
    }
}

mat_muveletek(10, 4, '+');

*/
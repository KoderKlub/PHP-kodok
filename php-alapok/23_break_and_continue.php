<?php

$noi_nevek = ["Andi", "Erika", "Ildiko", "Zsuzsi", "Eva", "Viola"];
$ferfi_nevek = ["Tibor", "Attila", "Zoltan", "Karoly", "Ferenc", "Bence"];


foreach ($noi_nevek as $nev){
    if ($nev == "Zsuzsi"){
        // break;
        continue;
    }
    echo $nev . PHP_EOL;
}


$osszes_nev = array_merge($noi_nevek, $ferfi_nevek);
shuffle($osszes_nev);

// var_dump($osszes_nev);

// foreach ($osszes_nev as $nev){
//     if (!in_array($nev, $ferfi_nevek)){
//         continue;
//     }
//     echo $nev . PHP_EOL;
// }

// foreach ($osszes_nev as $nev){
//     if (in_array($nev, $ferfi_nevek)){
//         echo $nev . PHP_EOL;
//     }
// }


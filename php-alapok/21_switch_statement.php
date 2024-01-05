<?php

// switch statement - switch utasítás|parancs (kondíciók)


// $kedvenc_szin = "piros";

// switch ($kedvenc_szin) {
//   case "piros":
//     echo "A piros a kedvenc szined." . PHP_EOL;
//     break;
//   case "zold":
//     echo "A zold a kedvenc szined." . PHP_EOL;
//     break;
//   case "kek":
//     echo "A kek a kedvenc szined." . PHP_EOL;
//     break;
//   default:
//     echo "Sem a piros, sem a zold, sem a kek nem tartozik a kedvenc szineid koze." . PHP_EOL;
// }


$szamok = [11, 22, 33, 44, 55, 1, 2, 3, 4, 5, 6, 7, 8];
$index = array_rand($szamok);
$nyero =  $szamok[$index];


switch ($nyero){
  case 11:
    echo "A 11-es szam nyert!" . PHP_EOL;
    break;
  case 22:
    echo "A 22-es szam nyert!" . PHP_EOL;
    break;
  case 33:
    echo "A 33-as szam nyert!" . PHP_EOL;
    break;
  case 44:
    echo "A 44-es szam nyert!" . PHP_EOL;
    break;
  case 55:
    echo "A 55-os szam nyert!" . PHP_EOL;
    break;
  default:
    echo "Egyik szam sem nyert!";
}
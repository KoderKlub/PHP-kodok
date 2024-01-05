<?php

// variable scope - változók láthatósága


function teszt(): void {
    static $szam = 0;
    echo $szam . PHP_EOL;
    $szam++;
}

// teszt();
// teszt();
// teszt();
// teszt();


// for ($i = 0; $i < 1; $i++){
//     $szoveg = "Hello";
// }

// echo $szoveg; // visible outside of the foor loop 

// $szamlalo = 0;

// while ($szamlalo != 1){
//     $szoveg = "Hello";
//     $szamlalo++;
// }

// echo $szoveg;

// if (5 == 5){
//     $szoveg = "Hello";
// }

// echo $szoveg;



$nevek_es_korok = [
    "Andi" => 32,
    "Ildi" => 18,
    "Zsani" => 44,
    "Viola" => 32,
];


foreach ($nevek_es_korok as $nev => $kor) {

}

echo "$nev $kor";

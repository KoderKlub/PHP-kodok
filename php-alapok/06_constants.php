<?php


// Variables - Változók
// $szam = 5;
// echo $szam . PHP_EOL;

// $szam = "nyolc"; // Változhat a benne eltárolt érték és az érték típusa is.
// echo $szam . PHP_EOL;


// Constants - Állandók
define("KERESZT_NEV", "Attila");
define("NEME", "férfi");
define("NEMZETISEG", "Magyar");

echo KERESZT_NEV . PHP_EOL;
echo NEME . PHP_EOL;
echo NEMZETISEG . PHP_EOL;

// KERESZT_NEV = "Tibor"; // Hibát okoz, nem változhat az értéke.


const SZULETESI_ORSZAG = "SK";
const PYTHON_ISMERET = true;
const PHP_ISMERET = true;
const SZERENCSESZAM = 1234;



/**
 * Az alapvető különbség a kettő között az, hogy a const a fordítási időben, 
 * míg a define() futási időben határozza meg az állandókat.
 */









class Teszt {

    // local to class
    const NUM1 = 47;

    // define('MIN_VALUE', '0.0');
}
<?php

// Increment/Decrement operators - Növelés/csökkentés operátorok
/*

++
--

*/

$szam = 10;

// post increment - utónövelés
// echo $szam++ . PHP_EOL; // passes value to echo, then increments it
// echo $szam . PHP_EOL;   // passes value (now 11) to echo

// post decrement - utócsökkentés
// echo $szam-- . PHP_EOL; // passes value to echo, then decrements it
// echo $szam . PHP_EOL;   // passes value (now 9) to echo

// pre increment - előnövelés
// echo ++$szam . PHP_EOL; // increments, then passes the value to echo

// pre decrement - előcsökkentés
echo --$szam . PHP_EOL; // decrements, then passes the value to echo

<?php

// strings - karakterláncok

// '' vs "" - string interpolation
// escape character \
// strlen, string_replace
// HEREDOC vs NOWDOC
// String operators

// $nev = 'Andi';

// $szoveg1 = 'Hello $nev';    // string is not interpolated
// $szoveg2 = "Hello $nev";    // string is interpolated
// $szoveg3 = "Hello \$nev";   // string is not interpolated if $ is escaped with \
// $szoveg4 = "Hello {$nev}";  // string is interpolated
// $szoveg5 = "Hello ${nev}";  // string is interpolated, but deprecated 

// echo $szoveg1;
// echo PHP_EOL;

// echo $szoveg2;
// echo PHP_EOL;

// echo $szoveg3;
// echo PHP_EOL;

// echo $szoveg4;
// echo PHP_EOL;
// echo $szoveg5;


// $szoveg = "Hello Ildi!";

// echo strlen($szoveg);
// echo PHP_EOL;
// echo str_replace("Ildi", "Aniko", $szoveg);


// $szoveg = "Azt mondta: \"Te vagy a legjobb baratom.\"";
// $text = 'It\'s a good sign.';
// echo $szoveg;
// echo $text;


// $he = 'Bob';
// $she = 'Alice';

// Heredoc
// $szoveg = <<<TEXT
// $he said "PHP is awesome".
// "Of course" $she agreed."
// TEXT;

// echo $szoveg;

// Nowdoc
// $nev = 'Andi';

// $text = <<<'TEXT'
// Hello $nev
// Goodbye!
// TEXT;

// echo $text;


// you have to escape double quotes
// $html = "<p class=\"first\">$text</p>
//          <p class=\"second\"$moretext</p>";

// you dont't have to escape double quotes
// $html = <<<HTML
// <p class="first">$text</p>
// <p class="second">$moretext</p>
// HTML;


// String operators - String operátorok
/*

.
.=

*/

$nev = 'Andi';

// echo "Hello" . " " . $nev;

$koszones = "Szia ";
$koszones .= $nev;
echo $koszones;  

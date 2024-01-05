<?php

// József Attila - Megfáradt ember (mint Novdoc string)
$vers = <<<'VERS'
A földeken néhány komoly paraszt
hazafele indul hallgatag.
Egymás mellett fekszünk: a folyó meg én,
gyenge füvek alusznak a szívem alatt.

A folyó csöndes, nagy nyugalmat görget,
harmattá vált bennem a gond és teher;
se férfi, se gyerek, se magyar, se testvér,
csak megfáradt ember, aki itt hever.

A békességet szétosztja az este,
meleg kenyeréből egy karaj vagyok,
pihen most az ég is, a nyugodt Marosra
s homlokomra kiülnek a csillagok.
VERS;

// echo $vers;
// $szoveg = "Hello! Hogy vagy?";

// TODO: Írd a verset egy vers.txt fájlba.
// $file = fopen("vers.txt", "w");
// fwrite($file, $vers);
// fclose($file);

// TODO: Olvasd be a vers.txt fájlt.
$file = fopen("vers.txt", "r") or die("Cannot open file!");

// echo fread($file, filesize("vers.txt"));  // read the whole file

// echo fgets($file);  // read single line

while(!feof($file)) {
    $line = fgets($file);
    // echo strtoupper($line); // only works with ASCII characters
    echo mb_strtoupper($line, 'UTF-8'); // you have to enable mbstring extension in php.ini
}


fclose($file);
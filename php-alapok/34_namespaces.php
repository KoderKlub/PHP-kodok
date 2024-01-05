<?php


// namespaces - névterek

require "Languages/English.php";
require "Languages/Hungarian.php";

// part 1
// Languages\ENG\hello();
// Languages\HUN\hello();


// part 2
// use function Languages\ENG\hello as en_hello;
// use function Languages\HUN\hello as hu_hello;

// en_hello();
// hu_hello();


// part 3
// use Languages\ENG as en;
// use Languages\HUN as hu;

// en\hello();
// hu\hello();

// en\count(1, 5);
// echo count([1, 2, 3, 4, 5, 6, 7]);

// part 4
// use const Languages\ENG\lucky_num as en_lucky_num;
// use const Languages\HUN\lucky_num as hu_lucky_num;

// echo en_lucky_num;
// echo PHP_EOL;
// echo hu_lucky_num;

// part 5
// use Languages\ENG as en;
// use Languages\HUN as hu;

// echo en\lucky_num;
// echo PHP_EOL;
// echo hu\lucky_num;

// part 6
// use Languages\ENG\Translation as TranslationENG;
// use Languages\HUN\Translation as TranslationHUN;

// $eng = new TranslationENG();
// $hun = new TranslationHUN();

// part 7
echo PHP_EOL;
echo $valtozo;

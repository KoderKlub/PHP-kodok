<?php

// Array operators - Tömboperátorok
/*

+
==
===
!=
<>
!==

*/

$nevek1 = ["Andi", "Erika", "Ildiko", "Zsuzsi"];
$nevek2 = ["Andi", "Erika", "Ildikoo", "Zsuzsi"];

$szamok1 = [1, 2, 3, 4];
$szamok2 = [1, 2, 3, "4"];

// $szamok3 = [4, 5, 6, 7];

// var_dump($szamok1 !== $szamok2);
// var_dump($szamok1 === $szamok2);
// var_dump($szamok1 != $szamok2);
// var_dump($nevek1 !== $nevek2);

$gyumolcsok1 = ["a" => "alma", "b" => "banán"];
$gyumolcsok2 = ["a2" => "barack", "b2" => "eper", "c" => "cseresznye"];

$gyumolcsok_union = $gyumolcsok1 + $gyumolcsok2;
print_r($gyumolcsok_union);

<?php

// if conditionals - if kondíciók|feltételek


// $szam1 = 10;
// $szam2 = 10;


// if ($szam1 < $szam2) {
//     echo "kisebb" . PHP_EOL;
// }
// elseif ($szam1 > $szam2) {
//     echo "nagyobb" . PHP_EOL;
// }
// elseif ($szam1 != $szam2) {
//     echo "nem egyenlo" . PHP_EOL;
// }
// else {
//     echo "egyenlo" . PHP_EOL;
// }


$eletkor = 17;


if ($eletkor <= 5){
    echo "Igyál tejecskét." . PHP_EOL;
}
elseif ($eletkor > 5 and $eletkor <= 10){
    echo "Igyál narancslét." . PHP_EOL;
}
elseif ($eletkor > 10 and $eletkor <= 15){
    echo "Belekortyolhatsz apu sörébe." . PHP_EOL;
}
elseif ($eletkor > 15 and $eletkor < 18){
    echo "Egy pohár sört megihatsz." . PHP_EOL;
}
else{
    echo "Annyi sört ihatsz, amennyit szeretnél." . PHP_EOL;
}

<?php

/*

while (condition is true) {
  execute the code;
}

*/

$szamlalo = 0;

// while ($szamlalo < 10){
//   echo "Hello". PHP_EOL;
//   $szamlalo++;
// }


$nevek = ["Andi", "Erika", "Ildiko", "Zsuzsi", "Aniko"];

while ($szamlalo < count($nevek)){
    echo $nevek[$szamlalo] . PHP_EOL;
    $szamlalo++;
    // sleep(1);
    // usleep(500000); // Halt time in microseconds. A microsecond is one millionth of a second.
}



<?php

namespace Languages\ENG;

function hello(): void {
    echo "Hello! How are you?" . PHP_EOL;
}

// a konstansok beletartoznak a névtérbe
const lucky_num = 42;

class Translation {

}

function count(int $start, int $end) {
    for ($i = $start; $i < $end; $i++) {
        echo $i . PHP_EOL;
    }
}

// count(0, 5);
// echo \count([1, 2, 3, 4, 5, 6, 7]);

// nem tartozik a névtérbe
$valtozo = 51;


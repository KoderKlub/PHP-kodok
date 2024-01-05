<?php

declare(strict_types=1);

// named arguments - nevesített argumentumok

function udvozles(string $vez_nev, string $ker_nev, string $koszones="Szia", int $kor=0): string {
    $udv = "$koszones $vez_nev $ker_nev! Te $kor éves vagy." . PHP_EOL;
    return $udv;
}


// without named arguments
echo udvozles("Kovacs", "Erika", "Szia", 41);


// with named arguments - megnevezett/nevesített argumentumok
echo udvozles(vez_nev: "Kovacs", ker_nev: "Erika", kor: 41);

// the order of arguments can be changed when using named arguments
echo udvozles(ker_nev: "Doe", vez_nev: "John", kor: 32);

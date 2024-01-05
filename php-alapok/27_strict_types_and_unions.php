<?php

declare(strict_types=1);

// típusos argumentumok és visszadott típusok, szigorú típus megfeleltetés függvényeknél

// argumentumnak muszály int vagy float típusnak lennie
// a visszaadott értéknek is muszály int vagy float típusnak lennie
function osszeadas(int|float $szam1, int|float $szam2): int|float {
    return $szam1 + $szam2;
}


echo osszeadas(5.5, 7);


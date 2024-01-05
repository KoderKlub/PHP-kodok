<?php

// match statement - match utasítás|parancs (kondíciók)
// switch vs match
// switch (== loose comparison - laza összehasonlítás)
// match (=== strict comparison - szigorú összehasonlítás)

$fizetesi_kod = 1012;

switch ($fizetesi_kod) {
    case 0:
        echo "Kérem válassza ki a fizetés módját.";
        break;
    case 101: // VISA
    case 102: // Mastercard
        echo "Ön a bankkártyás fizetési módot választotta.";
        break;
    case 103:
        echo "Ön a Paypal fizetési módot választotta.";
        break;
    case 104:
        echo "Ön a Stripe fizetési módot választotta.";
        break;
    default:
        echo "Nem választható fizetési mód.";
}


echo PHP_EOL;

$fiz_mod = match ($fizetesi_kod){
    0 => "Kérem válassza ki a fizetés módját.",
    101, 102 => "Ön a bankkártyás fizetési módot választotta.",
    103 => "Ön a Paypal fizetési módot választotta.",
    104 => "Ön a Stripe fizetési módot választotta.",
    default => "Nem választható fizetési mód."
};

echo $fiz_mod;


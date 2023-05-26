<?php

//Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems 
//reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).

$sk1 = rand(0, 2);
$sk2 = rand(0, 2);
$sk3 = rand(0, 2);
$sk4 = rand(0, 2);

$nuliai = 0;
$vienetai = 0;
$dvejetai = 0;

if ($sk1 == 0) {
    $nuliai++;
} elseif ($sk1 == 1) {
    $vienetai++;
} elseif ($sk1 == 2) {
    $dvejetai++;
}

if ($sk2 == 0) {
    $nuliai++;
} elseif ($sk2 == 1) {
    $vienetai++;
} elseif ($sk2 == 2) {
    $dvejetai++;
}

if ($sk3 == 0) {
    $nuliai++;
} elseif ($sk3 == 1) {
    $vienetai++;
} elseif ($sk3 == 2) {
    $dvejetai++;
}

if ($sk4 == 0) {
    $nuliai++;
} elseif ($sk4 == 1) {
    $vienetai++;
} elseif ($sk4 == 2) {
    $dvejetai++;
}

echo "Nulių kiekis: " . $nuliai . "<br>";
echo "Vienetų kiekis: " . $vienetai . "<br>";
echo "Dvejetų kiekis: " . $dvejetai . "<br>";

<?php

//Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. 
//Suskaičiuokite kiek yra kiekvienos raidės.

$ilgis = 200;
$raides = array('A', 'B', 'C', 'D');
$mas = array();

for ($i = 0; $i < $ilgis; $i++) {
    $randomRaides = $raides[array_rand($raides)];
    $mas[] = $randomRaides;
}

$raidziuPasikartojimai = array_count_values($mas);

foreach ($raidziuPasikartojimai as $raide => $pasikartojimai) {
    echo "Raidė $raide pasikartoja $pasikartojimai kartų.\n";
}
<?php

//Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius. 
//Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas. 
//Suprogramuokite tris skirtingus scenarijus kai monetos metimą stabdome:
//Iškritus herbui;
//Tris kartus iškritus herbui;
//Tris kartus iš eilės iškritus herbui;

do {
    $coin = rand(0, 1);
    echo $coin;
} while ($coin !== 0);

echo '<br><br>';

$H = 0;
$S = 0;

do {
    $coin2 = rand(0, 1);
    if ($coin2 === 0) {
        echo 'H';
        $H = $H + 1;
    } else {
        echo 'S';
        $S++;
    }
} while ($H < 3);

echo '<br><br>';

$counter = 0;

do {
    $coin3 = rand(0, 1);
    if ($coin3 === 0) {
        echo 'H';
        $counter++;
    } else {
        echo 'S';
        $counter = 0;
    }
} while ($counter !== 3);
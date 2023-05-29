<?php

//Naršyklėje nupieškite linija iš 400 “*”.
//Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
//Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”;


$line = str_repeat('*', 400); // Sukuriame eilutę su 400 žvaigždutėmis

$chunks = str_split($line, 50); // Suskaidome eilutę į dalis po 50 simbolių

foreach ($chunks as $chunk) {
    echo $chunk . "<br>"; // Spausdiname kiekvieną dalį atskiroje eilutėje
}

echo "<br>";
//---------------------------------------------------------------------------------------------

$star = '*';

for ($i = 1; $i <= 400; $i++) {
    echo "<div style='display: inline-block;'>$star</div>";
}

echo '<br><br>';

$star2 = '*';

for ($i = 1; $i <= 400; $i++) {
    echo $star2;
    if ($i % 50 == 0) {
        echo $star2 . '<br>';
    }
}
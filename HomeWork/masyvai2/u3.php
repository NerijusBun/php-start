<?php

echo '<pre>';


//Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).

$array = [];

for ($i = 0; $i < 10; $i++) {
    $subArraySize = rand(2, 20);
    $subArray = [];
    
    for ($s = 0; $s < $subArraySize; $s++) {
        $randLetters = chr(rand(65, 90));
        $subArray[] = $randLetters;
    }
    $array[] = $subArray;
}
echo "Masyvas su atsitiktiniu elementų kiekiu. kurių reikšmės atsitiktinai parinktos raidės iš intervalo A-Z: \n";
print_r($array);

// Išrūšiuokite antro lygio masyvus pagal abėcėlę

foreach ($array as $subArray) {
    sort($subArray); // sort() – funkcija, rūšiuoja masyvo reiksmes didėjančia tvarka
}

echo "Antro lygio masyvai išrūšiuoti pagal abėcėlę: \n";
foreach ($array as $key => $subArray) {
    echo "[$key] -> " . implode(', ', $subArray) . "\n";
}
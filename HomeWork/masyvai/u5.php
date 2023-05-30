<?php
echo '<pre>';

//Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, sudėdami atitinkamas reikšmes.
//Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) reikšmių ir kiek unikalių kombinacijų gavote.

$raides = ['A', 'B', 'C', 'D'];

for ($i = 0; $i < 200; $i++) {
    $array1[] = $raides[rand(0, 3)];
}

for ($i = 0; $i < 200; $i++) {
    $array2[] = $raides[rand(0, 3)];
}

for ($i = 0; $i < 200; $i++) {
    $array3[] = $raides[rand(0, 3)];
}

for ($i = 0; $i < 200; $i++) {
    $newValues = $array1[$i] . $array2[$i] . $array3[$i];
    $newArray[] = $newValues;
}

echo "Naujas jungtinis masyvas, sudėjus 3-jų masyvų reikšmes: \n";
print_r($newArray);

// Skaičiuojame, kiek unikalių naujo masyvo reikšmių kombinacijų
$uniqueCombos = count(array_unique($newArray));

// Skaičiuojame, kiek unikalių (po vieną, nesikartojančių) naujo masyvo reikšmių
$uniqueValues = count(array_unique(array_count_values($newArray)));

echo "Unikalios (po vieną, nesikartojančios) reikšmės: " . $uniqueValues . "\n";
echo "Unikalios kombinacijos: " . $uniqueCombos . "\n";


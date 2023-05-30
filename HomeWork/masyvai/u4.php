<?php
//Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.


$ilgis = 200;
$raides = array('A', 'B', 'C', 'D');
$mas = array();

for ($i = 0; $i < $ilgis; $i++) {
    $randomRaides = $raides[array_rand($raides)];
    $mas[] = $randomRaides;
}

sort($mas);

foreach ($mas as $raide) {
    echo $raide . ' ';
}
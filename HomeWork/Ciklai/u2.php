<?php

//Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais ir suskaičiuokite 
//kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti raudonos spalvos.

$count = 0;

for ($i = 0; $i < 300; $i++) {
    $number = rand(0, 300);
    $color = ($number > 275) ? 'red' : 'black';

    echo "<span style='color: $color;'>$number </span>";

    if ($number > 150) {
        $count++;
    }
}

echo "<br>Didesnių už 150 skaičių: $count";
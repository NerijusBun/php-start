<?php

//Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. 
//Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto 
//uždavinio funkciją.

$arr = [];

foreach(range(1, 100) as $_) {
    $digit = [
        'value' => rand(33, 77)
    ];
    $arr[] = $digit;
}

foreach($arr as $index => $digit) {
    $digit['div'] = rand(1, 11);
    $arr[$index] = $digit;
}

usort($arr, fn($a, $b) => $b['div'] <=> $a['div']);

echo '<pre>';
print_r($arr);
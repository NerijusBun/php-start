<?php

echo '<pre>';
//Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio masyvuose.

$array1 = array();

while (true) {
    $number1 = rand(100, 999);
    $array1[] = $number1;
    $array1 = array_unique($array1);
    
    if (count($array1) === 100) {
        break;
    }
}
echo "Pirmasis masyvas: \n";
print_r($array1);

// Array1
$array2 = array();

while (true) {
    $number2 = rand(100, 999);
    $array2[] = $number2;
    $array2 = array_unique($array2);
    
    if (count($array2) === 100) {
        break;
    }
}
echo "Antrasis masyvas: \n";
print_r($array2);

// Unikalus masyvas
$arrayUnique = array_intersect($array1, $array2);
echo "Masyvas iš elementų, kurie kartojasi abiejuose masyvuose: \n";
print_r(array_values($arrayUnique));
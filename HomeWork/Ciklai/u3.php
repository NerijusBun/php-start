<?php

//Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), 
//kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti. 
//Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane.

$randNumber = rand(3000, 4000);
$number77 = '';
$firstNumber = true;

for ($i = 1; $i <= $randNumber; $i++) {
    if ($i % 77 == 0) {
        if ($firstNumber === false) {
            $number77 .= ', ' . $i;
        } else {
            $firstNumber = false;
            $number77 .= $i;
        }
    }
}

echo "<div style='display:inline-block'>$number77</div>";
<?php

echo '<pre>';

//Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.

for ($i = 0; $i < 10; $i++) { // sugeneruojame masyvą iš 10 elementų (submasyvų)
    $subArray = [];
    
    for ($s = 0; $s < 5; $s++) { // kiekviename submasyve sugeneruojame po 5 elementus iš random skaičių
        $number = rand(5, 25);
        $subArray[] = $number;
    }

    $array[] = $subArray;
}

echo "Masyvas iš 10 elementų, kurio elementai - masyvai iš 5 elementų: \n";
print_r($array);
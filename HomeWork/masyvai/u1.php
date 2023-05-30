<?php

echo '<pre>';

//Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.

for($i = 0; $i < 30; $i++) {
    $randNumber = rand(5, 25);
    $array[] = $randNumber; 
}

print_r($array);
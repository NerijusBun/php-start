<?php

echo '<pre>';

//Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus paskutinį, elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis masyvas, kuris generuojamas pagal tokią pat salygą kaip ir pirmasis masyvas. Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. Paskutinio masyvo paskutinis elementas yra lygus 0;

//function makeArray($maxCount) {
//    static $counter = 0;
//    $subArray = [];
//    for($i = 1; $i <= 9; $i++){
//        $subArray[]= rand(0, 10);
//    }
//    $counter++;
//    if ($counter < $maxCount){
//        $subArray[] = makeArray($maxCount);
//    } else {
//        $subArray[] = 0;
//    }
//return $subArray;
//}
//
//$array[] = makeArray(rand(10,30));
//
//print_r($array);

$size = rand(10, 30);
$all = 0;

for ($i = 0; $i < $size; $i++) {
    
    $howBig = rand(10, 20);
    $small = [];    
    for ($k = 0; $k < $howBig - 1; $k++) {
        $small[] = rand(0, 10);
    }
    $small[] = $all;
    $all = $small;    
}

echo '<pre>';
print_r($all);


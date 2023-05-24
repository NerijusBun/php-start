<?php

//MASYVAI

echo '<pre>';

$m1 = array(); // nenaudoti

$m1 = ['Hello' => 'bebras', '77' => 'briedis', 'smauglys'];

array_push($m1, 'vilkas'); // nenaudotinas

$m1[] = 'barsukas'; // naudoti sekancio nario pridejimui

$m1[23] = 'bubu';
$m1[] = 'lala';

//array_unshift($m1, 'bulka'); // prideda i prieki

//print_r($m1);
//print_r(array_values($m1)); // sutvarko indeksus

//-------------------------------------------------------------------

$color = ['red', 'blue', 'green', 'yellow'];

//foreach ($color as $key => $value) {
//    $color [$key] = 'black';
//}

//foreach ($color as &$color) {
//    $color = 'black';
//}
//print_r($color);
//
//foreach ($color as &$value) {}
//
//unset($value);
//
//foreach ($color as $value) {} 
//
//print_r($color);

//$k1 = 5;
//$k2 = &$k1;
//$k1++;
//echo $k1, $k2;

//------------------------------------------------------------------

//for ($x = 1; $x <= 5; $x++) {
//    echo 'Numeris: '.$x.' <br>';
//}
//echo "\n\n";
//
//foreach (range(1, 5) as $x) {
//    echo 'Numeris: '.$x.' <br>';
//}

//-----------------------------------------------------------------
//MASYVAI MASYVE, ciklas cikle

$m2 = [
    [4, 'z', 11, 8],
    7,
    [55, 78, 2],
    [77, 9, 7, 7, 7],
    20
];

//print_r($m2);

$sum = 0;

foreach($m2 as $value) {

    if (is_array($value)) {
        foreach ($value as $digit) {
            if (is_integer($digit)) {        
            $sum += $digit;
            }
        }
    }
    else {
        if (is_integer($digit)) {
        $sum += $value;
        }
    }
}

//echo "\n\n";
//
//print_r($sum);

// DAROM MASYVA----------------------------------------------

$m3 = [];

foreach (range(1, 5) as $_) {

    $line = [];
    foreach (range(1, rand(2, 5)) as $_) {
        $line[] = rand(0, 9);

    }
    $m3[] = $line;
}

print_r($m3);



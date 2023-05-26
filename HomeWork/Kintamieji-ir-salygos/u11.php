<?php

//Naudokite funkcija rand(). Sugeneruokite 6 kintamuosius su atsitiktinem reikšmėm nuo 1000 iki 9999. 
//Atspausdinkite reikšmes viename stringe, išrūšiuotas nuo didžiausios iki mažiausios, atskirtas tarpais. 
//Naudoti ciklų ir masyvų NEGALIMA.

$sk1 = rand(1000, 9999);
$sk2 = rand(1000, 9999);
$sk3 = rand(1000, 9999);
$sk4 = rand(1000, 9999);
$sk5 = rand(1000, 9999);
$sk6 = rand(1000, 9999);

// Rūšiuojame reikšmes nuo didžiausios iki mažiausios
if ($sk1 < $sk2) {
    $temp = $sk1;
    $sk1 = $sk2;
    $sk2 = $temp;
}
if ($sk1 < $sk3) {
    $temp = $sk1;
    $sk1 = $sk3;
    $sk3 = $temp;
}
if ($sk1 < $sk4) {
    $temp = $sk1;
    $sk1 = $sk4;
    $sk4 = $temp;
}
if ($sk1 < $sk5) {
    $temp = $sk1;
    $sk1 = $sk5;
    $sk5 = $temp;
}
if ($sk1 < $sk6) {
    $temp = $sk1;
    $sk1 = $sk6;
    $sk6 = $temp;
}
if ($sk2 < $sk3) {
    $temp = $sk2;
    $sk2 = $sk3;
    $sk3 = $temp;
}
if ($sk2 < $sk4) {
    $temp = $sk2;
    $sk2 = $sk4;
    $sk4 = $temp;
}
if ($sk2 < $sk5) {
    $temp = $sk2;
    $sk2 = $sk5;
    $sk5 = $temp;
}
if ($sk2 < $sk6) {
    $temp = $sk2;
    $sk2 = $sk6;
    $sk6 = $temp;
}
if ($sk3 < $sk4) {
    $temp = $sk3;
    $sk3 = $sk4;
    $sk4 = $temp;
}
if ($sk3 < $sk5) {
    $temp = $sk3;
    $sk3 = $sk5;
    $sk5 = $temp;
}
if ($sk3 < $sk6) {
    $temp = $sk3;
    $sk3 = $sk6;
    $sk6 = $temp;
}
if ($sk4 < $sk5) {
    $temp = $sk4;
    $sk4 = $sk5;
    $sk5 = $temp;
}
if ($sk4 < $sk6) {
    $temp = $sk4;
    $sk4 = $sk6;
    $sk6 = $temp;
}
if ($sk5 < $sk6) {
    $temp = $sk5;
    $sk5 = $sk6;
    $sk6 = $temp;
}

echo $sk1 . ' ' . $sk2 . ' ' . $sk3 . ' ' . $sk4 . ' ' . $sk5 . ' ' . $sk6;
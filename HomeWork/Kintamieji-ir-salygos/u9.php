<?php

//Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. 
//Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. 
//Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.

$sk1 = rand(0, 100);
$sk2 = rand(0, 100);
$sk3 = rand(0, 100);

$vidurkis = ($sk1 + $sk2 + $sk3) / 3;

// Patikriname ar reikia atmesti reikšmes mažesnes nei 10 arba didesnes nei 90
$atmestuSk1 = ($sk1 < 10 || $sk1 > 90) ? 0 : $sk1;
$atmestuSk1 = ($sk2 < 10 || $sk2 > 90) ? 0 : $sk2;
$atmestuSk1 = ($sk3 < 10 || $sk3 > 90) ? 0 : $sk3;

// Skaičiuojame vidurkį, atmetus reikšmes mažesnes nei 10 arba didesnes nei 90

$atmetimoVidurkis = ($atmestuSk1 + $atmestuSk2 + $atmestuSk3) / 3;

echo "Aritmetinis vidurkis: " . round($vidurkis) . "<br>";
echo "Vidurkis be atmetimų: " . round($atmetimoVidurkis) . "<br>";
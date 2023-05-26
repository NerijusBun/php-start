<?php

//Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). 
//Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. 
//Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.

$valandos = rand(0, 23);
$minutes = rand(0, 59);
$sekundes = rand(0, 59);

echo 'Pradinis laikas: ' . sprintf("%02d", $valandos) . ':' . sprintf("%02d", $minutes) . ':' . sprintf("%02d", $sekundes) . '<br>';

$papildomos_sekundes = rand(0, 300);

$laikas_po_pridejimo = mktime($valandos, $minutes, $sekundes + $papildomos_sekundes);

$naujos_valandos = date('H', $laikas_po_pridejimo);
$naujos_minutes = date('i', $laikas_po_pridejimo);
$naujos_sekundes = date('s', $laikas_po_pridejimo);

// Atspausdiname galutinį laiką su pridėtomis sekundėmis
echo 'Laikas po pridėjimo: ' . sprintf("%02d", $naujos_valandos) . ':' . sprintf("%02d", $naujos_minutes) . ':' . sprintf("%02d", $naujos_sekundes) . '<br>';

// Atspausdiname pridėtas sekundes
echo 'Pridėtos sekundės: ' . $papildomos_sekundes;
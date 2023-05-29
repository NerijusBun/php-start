<?php

//Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides.
//Rezultatą atspausdinti.

$sakinys = "An American in Paris";

$aSkaicius = substr_count(strtolower($sakinys), 'a');

echo $aSkaicius;
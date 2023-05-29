<?php

//Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”. 
//Rezultatą atspausdinti.

$sakinys = "An American in Paris";

$pakeistasSakinys = str_ireplace("a", "*", $sakinys);

echo $pakeistasSakinys;
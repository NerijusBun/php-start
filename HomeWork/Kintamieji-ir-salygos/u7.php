<?php

//Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. 
//Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni.

for ($i = 0; $i < 3; $i++) {
    $sk = rand(-10, 10);
    
    if ($sk < 0) {
        echo "<span style='color: green;'>$sk</span><br>";
    } elseif ($sk == 0) {
        echo "<span style='color: red;'>$sk</span><br>";
    } else {
        echo "<span style='color: blue;'>$sk</span><br>";
    }
}
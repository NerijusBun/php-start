<?php

//Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. 
//Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.

$sk1 = rand(0, 25);
$sk2 = rand(0, 25);
$sk3 = rand(0, 25);

echo "Kintamasis sk1: $sk1, sk2: $sk2, sk3: $sk3";
echo '<br><br>';

if (($sk1 < $sk2 && $sk2 < $sk3) || ($sk1 > $sk2 && $sk2 > $sk3)) { // b vidurinis
    $middle = $sk2;
    $middle = 'sk2';
    echo "Kintamasis, turintis vidurinę reikšmę, yra $middle.";
} else if (($sk2 < $sk3 && $sk3 < $sk1) || ($sk2 > $sk3 && $sk3 > $sk1)) { // c vidurinis
    $middle = $sk3;
    $middle = 'sk3';
    echo "Kintamasis, turintis vidurinę reikšmę, yra $middle.";
} else if (($sk3 < $sk1 && $sk1 < $sk2) || ($sk3 > $sk1 && $sk1 > $sk2)) { // a vidurinis
    $middle = $sk1;
    $middle = 'sk1';
    echo "Kintamasis, turintis vidurinę reikšmę, yra $middle.";
} else if (($sk1 == $sk2 || $sk1 == $sk3 || $sk2 == $sk3) || ($sk1 == $sk2 && $sk1 == $sk3 && $sk2 == $sk3)){ // visi arba du yra lygūs
    echo "Nėra kintamojo, turinčio vidurinę reikšmę.";
}
    
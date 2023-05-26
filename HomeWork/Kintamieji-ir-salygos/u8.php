<?php

//Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. 
//Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. 
//Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.

$zvakiuKiekis = rand(5, 3000);

$zvakiuKaina = $zvakiuKiekis * 1; // Kaina už vieną žvakę yra 1 EUR

if ($zvakiuKaina > 1000 && $zvakiuKaina <= 2000) {
    $nuolaida = 0.03; // 3% nuolaida
    $zvakiuKaina -= $zvakiuKaina * $nuolaida;
} elseif ($zvakiuKaina > 2000) {
    $nuolaida = 0.04; // 4% nuolaida
    $zvakiuKaina -= $zvakiuKaina * $nuolaida;
}

echo "Perkama žvakių: $zvakiuKiekis vnt.<br>";
echo "Kaina: $zvakiuKaina EUR";
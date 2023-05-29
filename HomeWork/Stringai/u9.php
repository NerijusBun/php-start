<?php

//Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. 
//Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.

$text = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";

$words = explode(" ", $text);

$count = 0;

foreach ($words as $word) {
    if (strlen($word) <= 5) {
        $count++;
    }
}

echo "Žodžių, trumpesnių arba lygių nei 5 raidės, skaičius: " . $count;
echo "<br>";
//-------------------------------------------------------------------------------------------
$text2 = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";

$words = explode(" ", $text2);

$count2 = 0;

foreach ($words as $word) {
    if (strlen($word) <= 5) {
        $count2++;
    }
}
 echo "Žodžių, trumpesnių arba lygių nei 5 raidės, skaičius: " . $count2;
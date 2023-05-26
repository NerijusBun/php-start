<?php

//Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). 
//Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų.

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

if (($a + $b > $c) && ($b + $c > $a) && ($c + $a > $b)) {
    echo "Galima sudaryti trikampį su kraštinėmis: a = $a, b = $b, c = $c";
} else {
    echo "Negalima sudaryti trikampio su kraštinėmis: a = $a, b = $b, c = $c";
}
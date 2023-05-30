<?php

//Kazys ir Petras žaidžia Bingo. Petras surenka taškų kiekį nuo 10 iki 20, Kazys surenka taškų kiekį nuo 5 iki 25. 
//Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją laimėjo: ​laimėtojo vardas​”. 
//Taškų kiekį generuokite funkcija ​rand()​. Žaidimą laimi tas, kas greičiau surenka 222 taškus. 
//Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų. Nenaudoti cikle break.



$petrasTaskai = 0;
$kazysTaskai = 0;

while ($petrasTaskai < 222 && $kazysTaskai < 222) {
    $petrasTaskai += rand(10, 20);
    $kazysTaskai += rand(5, 25);
}

echo "Petras: $petrasTaskai taškai,  ";
echo "Kazys: $kazysTaskai taškai. ";

if ($petrasTaskai >= 222) {
    echo "Partiją laimėjo: Petras";
} else {
    echo "Partiją laimėjo: Kazys";
}

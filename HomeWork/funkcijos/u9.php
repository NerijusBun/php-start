<?php


//Sugeneruokite masyvą iš trijų elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 33. 
//Jeigu tarp trijų paskutinių elementų yra nors vienas ne pirminis skaičius, prie masyvo pridėkite 
//dar vieną elementą- atsitiktinį skaičių nuo 1 iki 33. Vėl patikrinkite pradinę sąlygą ir 
//jeigu reikia pridėkite dar vieną elementą. Kartokite, kol sąlyga nereikalaus pridėti elemento. 


// Funkcija, kuri tikrina ar skaičius yra pirminis
function arPirminis($sk) {
    if ($sk < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($sk); $i++) {
        if ($sk % $i === 0) {
            return false;
        }
    }
    return true;
}

// Sugeneruojame masyvą su trimis atsitiktiniais skaičiais nuo 1 iki 33
$masyvas = array();
for ($i = 0; $i < 3; $i++) {
    $random_skaicius = rand(1, 33);
    $masyvas[] = $random_skaicius;
}

// Tikriname ar tarp trijų paskutinių elementų yra nors vienas ne pirminis skaičius
while (!arPirminis(end($masyvas)) || !arPirminis($masyvas[count($masyvas) - 2]) || !arPirminis($masyvas[count($masyvas) - 3])) {
    // Pridedame papildomą atsitiktinį skaičių
    $random_skaicius = rand(1, 33);
    $masyvas[] = $random_skaicius;
}

// Spausdiname rezultatą
echo "Sugeneruotas masyvas: " . implode(", ", $masyvas) . "\n";


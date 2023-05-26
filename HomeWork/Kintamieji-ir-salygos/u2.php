<?php

//Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. 
//Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.

$sk1 = rand(0, 4);
$sk2 = rand(0, 4);

// Tikriname, kuris skaičius didesnis ir mažesnis
if ($sk1 > $sk2) {
    $rezultatas = ($sk2 == 0) ? "Dalyba iš nulio negalima." : round($sk1 / $sk2, 2); // round( , 2) - PHP funkcija apvalinimui iki 2 po kablelio.
    echo $rezultatas;
  
} else if ($sk1 < $sk2) {   
    $rezultatas = ($sk1 == 0) ? "Dalyba iš nulio negalima." : round($sk2 / $sk1, 2);
    echo $rezultatas;
  
} else if ($sk1 == $sk2) {
    echo "Reikšmės lygios.";
}
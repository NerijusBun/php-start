<?php

//Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
//Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. 
//Jį atspausdinti.

$name = "Jonaitis";
$surname = "Petraitis";

$paskutRaides = substr($name, -1) . substr($surname, -1);

echo $paskutRaides;
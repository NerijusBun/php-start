<?php

//Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus.
//Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.

$name = "Petras";
$surname = "Petraitis";

$dRaides = strtoupper($name);   
$mRaides = strtolower($surname);

echo $dRaides. "<br>";
echo $mRaides;
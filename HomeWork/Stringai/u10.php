<?php

//Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.


$latin_alphabet = 'abcdefghijklmnopqrstuvwxyz';
$random_letters = str_shuffle($latin_alphabet);
$string_length = 3;

echo substr(str_shuffle($latin_alphabet), 0, 3);
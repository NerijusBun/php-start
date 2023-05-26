<?php

//Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus).
//Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
//"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".

$name = 'Nerijus';
$surname = 'Neriukas';
$birdthday = 1987;
$year = 2023;

$age = $year - $birdthday;

echo "I am $name $surname. I am $age age";

<?php

//Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). 
//Atspausdinti trumpesnį stringą.

$name = "Jonas";
$surname = "Jonaitis";

if (strlen($name) < strlen($surname)) {
    echo $name;
} else {
    $surname;
}
<?php

//Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. 
//Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.

$text = "An American in Paris";
$text2 = "Breakfast at Tiffany's";
$text3 = "2001: A Space Odyssey” ir “It's a Wonderful Life";


$pakeistasPavadinimas3 = preg_replace("/[aeiou]/i", "", $text3);
$pakeistasPavadinimas2 = preg_replace("/[aeiou]/i", "", $text2);
$pakeistasPavadinimas = preg_replace("/[aeiou]/i", "", $text);

echo $pakeistasPavadinimas . "<br>";
echo $pakeistasPavadinimas2 . "<br>";
echo $pakeistasPavadinimas3;

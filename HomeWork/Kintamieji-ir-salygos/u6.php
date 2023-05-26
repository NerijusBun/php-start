<?php

//Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. 
//Pvz skaičius 3- rezultatas: <h3>3</h3>

$sk = rand(1, 6);

echo "<h$sk>$sk</h$sk>";

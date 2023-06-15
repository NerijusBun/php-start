<?php

//Sukurti klasę Pinigine. Sukurti dvi privačias savybes popieriniaiPinigai ir metaliniaiPinigai. 
//Parašyti metodą ideti($kiekis), kuris prideda pinigus į piniginę. 
//Jeigu kiekis nedidesnis už 2, tai prideda prie metaliniaiPinigai, jeigu kitaip- prie popieriniaiPinigai. 
//Parašykite metodą skaiciuoti(), kuris suskaičiuotų ir atspausdintų popieriniaiPinigai ir metaliniaiPinigai sumą. Sukurti klasės objektą ir pademonstruoti veikimą. Nesvarbu kokios popierinės kupiūros ir metalinės monetos egzistuoja realiame pasaulyje.

class Pinigine {

private $popieriniaiPinigai = 0, $metaliniaiPinigai = 0;


public function ideti($kiekis): void
{
    if ($kiekis > 2) {
        $this->popieriniaiPinigai += $kiekis;
    } else {
        $this->metaliniaiPinigai += $kiekis;
    }
}


public function skaiciuoti(): void
{
    echo '<h1>Popierius: '.$this->popieriniaiPinigai.' metalas: '.$this->metaliniaiPinigai.'</h1>';
}


}
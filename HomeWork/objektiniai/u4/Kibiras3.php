<?php

//(EXTENDS) Sukurkite klasę kaip pirmame uždavinyje ir pavadinkite Kibiras3. 
//Sukurkite dar vieną klasę KibirasNePo1, kuri extendina klasę Kibiras3. 
//KibirasNePo1 turi naudoti visus tėvinius metodus, bet metodas Prideti1Akmeni() turi pridėti ne vieną o atsitiktinį akmenų kiekį nuo 2 iki 5. 
//Sukurkite KibirasNePo1 objektą ir pademonstruokite veikimą.

class Kibiras3 {

    protected $akmenuKiekis;


    public function __construct($kiekis = 0)
    {
        $this->akmenuKiekis = $kiekis;
    }

    public function prideti1Akmeni(): void
    {
        $this->akmenuKiekis++;
    }

    public function pridetiDaugAkmenu($kiekis): void
    {
        $this->akmenuKiekis += $kiekis;
    }

    public function kiekPririnktaAkmenu(): void
    {
        // return $this->akmenuKiekis; <--- reiktu sita daryt
        echo '<h1>Pririnkta: '.$this->akmenuKiekis.'</h1>';
    }

}
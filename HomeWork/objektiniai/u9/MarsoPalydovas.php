<?php

//(STATIC) Sukurkite klasę MarsoPalydovas.  Kontroliuokite objekto kūrimą iš klasės naudodami statinį metodą. 
//Padarykite taip, kad iš viso būtų galima sukurti tik du objektus iš šitos klasės. 
//Pirmam sukuriamam objektui įrašykite privačią savybę vardas lygią stringui “Deimas”, o antram tokią pat savybę tik lygią stringui “Fobas”. 
//Bandant sukurti trečią objektą, turėtų būti grąžinamas vienas iš anksčiau sukurtų objektų parinktas atsitiktine tvarka.


class MarsoPalydovas {
    private static $instance = [];
    private $title;

    private function __construct($title) 
    {
        $this->title = $title;
    }

    public static function getMarsoPalydovas () 
    {
        if(!isset(self::$instance[0])) {
            self::$instance[0] = new self('Deimas');
        }

        if(!isset(self::$instance[1])) {
            self::$instance[1] = new self('Fobas');
        }
        return self::$instance[rand(0, 1)];
    }

    private function __clone()
    {
       //return $this->title == 'Deimas' ? self::$instance[0] : self::$instance[1];
    }

    private function __wakeup()
    {
        //return $this->title == 'Deimas' ? self::$instance[0] : self::$instance[1];
        
    }

    public function __sleep()
    {
        return ['title'];
    }
    
    public function __destruct()
    {
        echo '<h1>Marso palydovas sunaikintas</h1>';
    }
}


    






<?php

//--------------FUNKCIJOS-------------------

$Hello = 'Labas';

function fun() {
    $Hello = 'Hi';
}

fun();

//echo $Hello;

//-------------REST-------------------

function sudeti($vienas, $du, ...$rest)
   {
      return $vienas + $du + array_sum($rest);
   }
   //echo sudeti().'<br>';
   //echo sudeti(1).'<br>';
   //echo sudeti(1, 2, 10, 10).'<br>';

// ---------------SPRED-------------

$m = [7, 8, 9];

[$a, $b, $c] = [...$m];

//echo $c;

// -------------STATIK FUNKCINIS PROGR------------

function add1() {
   static $c = 0;
   return ++$c;
}

//echo '<br>' . add1();
//echo '<br>' . add1();
//echo '<br>' . add1();

// ------------REKURCIJA---------------


function recursive($num){
   echo $num, 'START<br>';
   if($num < 3){
       //Kviečiame save. Padidiname numerį vienetu.
      recursive($num + 1);
   }
   echo $num, 'END<br>';
}
$startNum = 1;
recursive($startNum);

$mas = [
   1,
   1,
   [
      1,
      [
         1
      ],
      1
   ],
   1,
   1
];

echo '<pre>';

print_r($mas);

function countSum($array) {
   $sum = 0;
   foreach ($array as $val) {
      if (!is_array($val)) {
         $sum += $val;
      } else {
         $sum += countSum($val);
      }
   }
   return $sum;
}

echo '<h1>'.countSum($mas).'</h1>';

// -------- ANONIMINE FUNKCIJA-----------

$anonim = function() {
   echo '<h1>ANONIM</h1>';
};

$anonim();

// --------FUNKCIJA KURIAI REIKIA CALLBACK------------

function blaBla() {
   echo '<h1>BLA BLA BLA</h1>';
}


function saySomething($f) {
   $f();
}

//saySomething($anonim);
//saySomething('blaBla');
//
//saySomething(function() {
//   echo '<h1>INLINE</h1>';
//}
//);

// ---------USORT-----------
$masyvas = [
   ['bebras','kietas'],
   ['zuikis','trumpas'],
   ['vilkas','pilkas'],
   ['dramblys','storas'],
];

$sortName = function($a, $b) {
   return $a[0] <=> $b[0];
};

function sortNameDesc($a, $b) {
   return $b[0] <=> $a[0];
}

$sortType = fn($a, $b) => $a[1] <=> $b[1];  // arroy func

usort($masyvas, fn($a, $b) => $b[1] <=> $a[1]);

//print_r($masyvas);
//-------------------------------------------------------

$bebras = 'BEBRAS';

$addStars = fn() => '*'. $bebras .'*';

$addMinus = function() use (&$bebras) {
   return  '--'. $bebras .'--';
};

$bebras = $addMinus();

$bebras = $addMinus();

//echo $addStars() . '<br>';

echo $addMinus();

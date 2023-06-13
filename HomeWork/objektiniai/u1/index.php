<?php

//Sukurti klasę Kibiras1. Sukurti private savybę akmenuKiekis. 
//Parašyti šiai savybei metodus prideti1Akmeni() pridetiDaugAkmenu($kiekis) ir metodą kiekPririnktaAkmenu(). 
//Sukurti kibiro objektą ir pademonstruoti akmenų rinkimą į kibirą ir rezultatų išvedimą.

require __DIR__ . '/Kibiras1.php';


$petro = new Kibiras1;

$ievos = new Kibiras1;


$petro->prideti1Akmeni();
$petro->prideti1Akmeni();
$petro->prideti1Akmeni();

$petro->pridetiDaugAkmenu(7);
$ievos->pridetiDaugAkmenu(7);
$petro->prideti1Akmeni();

$petro->prideti1Akmeni();
$ievos->prideti1Akmeni();
$petro->prideti1Akmeni();

$ievos->kiekPririnktaAkmenu();
$petro->kiekPririnktaAkmenu();
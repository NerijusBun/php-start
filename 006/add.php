<?php

//duomenu ivedimas per terminal

$jsonFile = file_get_contents(__DIR__. '/data.json');
$dataFromJson = json_decode($jsonFile, 1);

$name = $_SERVER['argv'][1];
$amount = $_SERVER['argv'][2] ?? 0;

$data = array_map(function($line) use($name, $amount) {
    if ($line['name'] == $name) {
        $line['amount'] += $amount;
   }
   return $line; 
}, $dataFromJson);

$dataJson = json_encode($data);
file_put_contents(__DIR__. '/data.json', $dataJson);

echo "\n $name plus $amount\n";
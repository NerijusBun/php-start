<?php
$jsonFile = file_get_contents(__DIR__. '/data.json');
$data = json_decode($jsonFile, 1);

$name = $_SERVER['argv'][1];

$data[] = ['name' => $name, 'amount' => 0];

$dataJson = json_encode($data);
file_put_contents(__DIR__. '/data.json', $dataJson);

echo "\n $name $name added \n";
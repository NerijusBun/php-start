<?php
$jsonFile = file_get_contents(__DIR__. '/data.json');
$dataFromJson = json_decode($jsonFile, 1);

$name = $_SERVER['argv'][1];

$data  = array_filter($dataFromJson, fn($line) => $line['name'] != $name);

$dataJson = json_encode($data);
file_put_contents(__DIR__. '/data.json', $dataJson);

echo "\n $name gone \n";
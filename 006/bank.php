<?php

//vertimas i Json ir irasymas
echo '<pre>';
//$data = [
//    ['name' => 'bebras', 'amount' => 20],
//    ['name' => 'briedis', 'amount' => 120],
//    ['name' => 'antis', 'amount' => 0],
//
//];
//
//$dataJson = json_encode($data);
//$dataSer = serialize($data);
//
//file_put_contents(__DIR__. '/data.json', $dataJson);
//file_put_contents(__DIR__. '/data.ser', $dataSer);

// dekodavimas is Json

$jsonFile = file_get_contents(__DIR__. '/data.json');
$dataFromJson = json_decode($jsonFile, 1);
print_r($dataFromJson);

// dekodavimas is serilizacijos

$serFile = file_get_contents(__DIR__. '/data.ser');
$dataFromSer = unserialize($serFile);
print_r($dataFromSer);





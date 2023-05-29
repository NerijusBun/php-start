<?php

//Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; 
//Surasti ir atspausdinti epizodo numerį.

$text = 'Star Wars: Episode ' . str_repeat(' ', rand(0,5)) . rand(1,9) . ' - A New Hope';

$textChanged = preg_replace('/[\s]{0,5}/', '', $text);
$textNumber = substr($textChanged, strpos($textChanged, '') + 16, 1);

echo $textNumber;


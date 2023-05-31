<?php

echo '<pre>';


//Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;

$text = 'Hello!';

function someText($textInside) {
    echo "<h1>$textInside</h1>";
}

someText($text);
<?php

//-------FAILO IDEJIMAS I FAILA-----------

echo '<h1>MAIN START</h1>';

//require __DIR__ . '/file1.php'; // <----- naudot 1 budas

//include __DIR__ . '/file2.php'; // 2 budas

//include_once __DIR__ . '/file2.php'; // 3 budas

require_once __DIR__ . '/file2.php'; // 4 budas

echo '<h1>MAIN END</h1>';


<?php

// KONSTANTOS - CONST > rasomos didelem raidem.

define('BRIEDIS', 'Briedis jau miega');

echo BRIEDIS;

var_dump(defined(BRIEDIS));

// failu irasymai

file_put_contents('miskas.txt', BRIEDIS . "\n", FILE_APPEND);


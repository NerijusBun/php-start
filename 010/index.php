<?php

// sesijos mechanizmas
session_start();

//$_SESSION['ob'] = 'Ranzinis bebras';

echo $_SESSION['ob'];








//------------COOKIE----------------
// isiusti cookie su laiku
//setcookie ('bebras', 'Bebras plaukia upe', time() + 36);


//paimti cookie
//echo $_COOKIE['bebras'];

//------istrinti cookie nurodant laika -h------

//setcookie ('bebras', 'Bebras plaukia upe', time() - 400);

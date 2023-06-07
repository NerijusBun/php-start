<?php
//Padarykite puslapį su dviem mygtukais. Mygtukus įdėkite į dvi skairtingas formas- vieną GET ir kitą POST. Nenaudodami jokių konkrečių $_GET ar $_POST reikšmių, nuspalvinkite foną žaliai, kai paspaustas mygtukas iš GET formos ir geltonai- kai iš POST.

$color = $_SERVER['REQUEST_METHOD'] == 'POST' ? 'yellow' : 'green';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U6</title>
</head>
<body style="background:<?= $color ?>;">
    <form>
        <button type="submit">GET</button>
    </form>
    <form method="post">
        <button type="submit">POST</button>
    </form>
</body>
</html>
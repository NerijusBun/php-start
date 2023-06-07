<?php
//Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite, 
//o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su RGB spalvos kodu (pvz color=ff1234) 
//puslapio fono spalva pasidarytų tokios spalvos.

$color = $_GET['color'] ?? '000000';

if(preg_match('/^[0-9a-f]{6}$/', $color)) {
    $color = '#' . $color;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U2</title>
    <style>
        body {
            background: <?= $color ?>;
        }
        a {
            color: skyblue;
            display: block;
            font-size: 3em;
            padding: 40px;
        }
    </style>    
</head>
<body>
</body>
</html>
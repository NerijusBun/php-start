<?php
//Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. 
//Viena nuoroda su failo vardu, o kita nuoroda su failo vardu ir GET duomenų  perdavimo metodu perduodamu kintamuoju color=1. 
//Padaryti taip, kad paspaudus ant nuorodos su perduodamu kintamuoju fonas nusidažytų raudonai, o paspaudus ant nuorodos be perduodamo kintamojo, 
//vėl pasidarytų juodas.
?>

<!DOCTYPE html>
<html>
<head>
    <title>Juodo fono puslapis</title>
    <style>
        body {
            background-color: <?php echo isset($_GET['color']) && $_GET['color'] === '1' ? 'red' : 'black'; ?>;
        }
        
        a {
            color: white;
            display: block;
            margin: 20px;
            text-decoration: none;
            font-size: 30px;
            text-align: center;
            
        }
    </style>
</head>
<body>
    <a href="?color=0">Juodas fonas</a>
    <a href="?color=1">Raudonas fonas</a>
</body>
</html>
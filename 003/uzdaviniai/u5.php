<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-size:20px;
        }

        p{
            line-height:10px;
            margin:0;
        }
        
    </style>
</head>
<body>
<?php
    
    for ($x = 1; $x <= 100; $x++) {
        echo "<p>";
        for ($y = 1; $y <= 100; $y++) {
            if ($y === $x || $y === 101-$x){
                echo "<i style='color:red;'>*</i>";
            } else {
                echo "<i>*</i>";
            }
            
        }
        echo "</p>";
        }

    echo "</p>";
    echo "</div>";    
    
?>
</body>
</html>
<?php

if (isset($_GET['redirect'])) {
    header('http://localhost/php-start/HomeWork/web-mechanika/u5-blue.php');
    die;
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RED</title>
    <style>
        a {
            color: pink;
            font-size: 3em;
            padding: 40px;
        }
</head>
<body style="background:crimson;">
<a href="?redirect">LINKAS</a>
    
</body>
</html>
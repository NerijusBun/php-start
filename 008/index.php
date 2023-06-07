<?php
//nuotraukos ikelimas
$file = file_get_contents(__DIR__. '/camaro-zl1-2021-5k-5r.jpg');

header('Content-Type: image/jpeg');

http_response_code(400);

echo $file;


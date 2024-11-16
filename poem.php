<?php
$path = "poems";
if (!is_dir($path)) {
    mkdir($path);
}
$str_b = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>'."\n\t";

$str_e = "\n".'</body>
</html>';

$f = fopen("poem.txt", "r");

$arr = file("poem.txt");

$content = "<h1>Poem</h1>";

$h = fopen($path."/poem.html", "w");

fwrite($h, $str_b);
fwrite($h, $content);
fwrite($h, $str_e);

fclose($f);
fclose($h);
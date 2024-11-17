<?php

$path = "example";
if (!is_dir($path)) {
    mkdir($path);
}
$str_b = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
    .hero {
        color:red;
    }
    </style>
</head>
<body>' . "\n\t";

$str_e = "\n" . '</body>
</html>';

$data = file_get_contents("https://www.example.com");
// $data  = '<h1>cat</h1> and <h2>dog</h2>';
$reg = '/<h1>([\w ]+)<\/h1>/';
//echo $data;
if (preg_match_all($reg, $data, $arr)) {
    $h1 = '<h1 claas="hero">'.$arr[1][0]."</h1>";
}

// $r = '/<.+>/';
// $s = '<h1>cat</h1> and <h2>dog</h2>';
// if (preg_match_all($r, $s, $arr))
//print_r($arr);

$h = fopen($path."/index.html", "w");

fwrite($h, $str_b);
fwrite($h, $h1);
fwrite($h, $str_e);

fclose($h);
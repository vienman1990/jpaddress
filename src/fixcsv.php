<?php

$arr = [];

$file = fopen(__DIR__.'/KEN_ALL.CSV', 'r');

while (! feof($file)) {
    $data = fgetcsv($file);
    $arr[$data[2]] = [
        $data[6],
        $data[7],
        $data[8],
    ];
}

fclose($file);

$file = __DIR__.'/data.json';
$open = fopen($file, 'a');
$write = fwrite($open, json_encode($arr)."\n");
fclose($open);

<?php

header("Access-Control-Allow-Origin: *");

$diretorio = dir("./pdf/");
$files = [];

while($arquivo = $diretorio -> read()){
    $files[] = $arquivo;
}

$diretorio->close();

foreach ($files as $key => $value) {
    if ($value == ".." or $value == ".")
        unset($files[$key]);
}

print(json_encode($files));

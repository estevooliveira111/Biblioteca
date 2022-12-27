<?php

header("Access-Control-Allow-Origin: *");

$diretorio = dir("./pdf/");
$files = [];

while($arquivo = $diretorio -> read()){
    $files[] = $arquivo;
}

$diretorio -> close();

unset($files[0]);
unset($files[1]);
sort($files);

print(json_encode($files));

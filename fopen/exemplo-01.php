<?php

// Caso o arquivo não exista ele será criado, e o cursor vai pro início do arquivo
// $file = fopen("log.txt", "w+");
// Caso o arquivo não exista ele será criado, e o cursor vai pro fim do arquivo
$file = fopen("log.txt", "a+");

fwrite($file, date("Y-m-d H:i:s") . "\r\n");

fclose($file);

echo "Arquivo criado com sucesso";

?>
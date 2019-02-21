<?php

$file = fopen("teste.txt", "w+");

fclose($file);

// Remove o arquivo
unlink("teste.txt");

echo "Arquivo removido com sucesso";

?>
<?php

// Include tenta funcionar mesmo que o arquivo não exista ou esteja incorreto.
// Dá acesso ao include path, que pode ser configurado no servidor
// Permite o include de arquivos remotos (de outros servidores)
include "inc/exemplo-01.php";

$resultado = somar(10, 30);

echo $resultado;

?>
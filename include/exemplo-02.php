<?php

// Include tenta funcionar mesmo que o arquivo não exista ou esteja incorreto.
// Dá acesso ao include path, que pode ser configurado no servidor
// Permite o include de arquivos remotos (de outros servidores)
include "inc/exemplo-01.php";

// Para evitar arquivos repetidos no include para não lançar exceções
// existe o include_once. ex:
//  include_once "inc/exemplo-01.php";
//  include_once "inc/exemplo-01.php";
// Neste caso não irá gerar exceção porque o segundo include será desconsiderado

$resultado = somar(10, 30);

echo $resultado;

?>
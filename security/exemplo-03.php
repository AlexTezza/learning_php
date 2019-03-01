<?php

// https://www.elated.com/articles/understanding-permissions/

$pasta = "arquivos";
$permissao = "0775";

if (!is_dir($pasta)) {

    mkdir($past, $permissao);

    echo "Diretório criado com sucesso.";

}

?>
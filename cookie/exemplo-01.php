<?php

$data = array(
    "empresa"=>"Nome da Empresa"
);

setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

echo "Cookie criado."

?>
<?php

if (!is_dir("images")) {
    mkdir("images");
}

// Limpar o diretório inteiro
foreach (scandir("images") as $item) {
    if (!in_array($item, array(".", ".."))) {
        unlink("images/" . $item);
    }
}

?>
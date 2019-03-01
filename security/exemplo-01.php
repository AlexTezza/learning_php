<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // $cmd = $_POST["cmd"];
    // escapeshellcmd = não deixa injetar comandos de sistema (evitar ataques)
    $cmd = escapeshellcmd($_POST["cmd"]);

    var_dump($cmd);

    echo "<pre>";
    
    $comando = system($cmd, $retorno);
    
    echo "</pre>";
    
}

?>

<!-- Teste de execução de camando de sistema  -->
<!-- dir C:\ && C:/xampp/xampp_stop.exe-->

<form method="post">

    <input type="text" name="cmd" />
    <button type="submit">Enviar</button>

</form>
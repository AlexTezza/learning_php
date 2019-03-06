<form method="post">
    <input type="text" name="busca">
    <button type="submit">Enviar</button>
</form>

<?php

// Simulando uma entrada, como se essa string tivesse sido digitada no input do form.
$_POST["busca"] = '<a href="#"><strong>Oi</strong><script>alert("ok")</script>';

if (isset($_POST["busca"])) {
    // strip_tags desconsidera as tags e recebe por parâmetro as tags que podem ser interpretadas.
    echo strip_tags($_POST["busca"], "<strong><a>");

    // htmlentities transfoma tudo em texto
    // echo htmlentities($_POST["busca"]);
}

?>
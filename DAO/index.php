<?php

require_once("config.php");

$sql = new Sql();

$usuario = new Usuario();
$usuario->loadById(4);

// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo $usuario;

?>
<?php

require_once("config.php");

// Carrega um usuário
// $usuario = new Usuario();
// $usuario->loadById(4);
// echo $usuario;

// Carrega uma lista de usuários
// $lista = Usuario::getList();
// echo json_encode($lista);

// Carrega uma lista de usuários buscando pelo login
// $search = Usuario::searchByLogin("at");
// echo json_encode($search);

// Carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("atezza", "!@#$%");
echo $usuario;

?>
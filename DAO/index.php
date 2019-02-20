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
// $usuario = new Usuario();
// $usuario->login("root", "123456");
// echo $usuario;

// Criando um novo usuário
// $aluno = new Usuario("aluno", "@lun0");
// $aluno->insert();
// echo $aluno;

// Update de usuario
$usuario = new Usuario();
$usuario->loadById(5);
$usuario->update("professor", "5323344");

echo $usuario;
 
?>
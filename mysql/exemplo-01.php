<?php

// Cria a conexão com o banco de dados
$conn = new mysqli("localhost", "root", "", "dbphp7");

// Testa a conexão
if ($conn->connect_error) {
    echo "Error: " . $conn->connect_error;
}

// Cria o statement
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");

// É necessário criar variáveis e instância-las com o valores que serão passados para os parâmetros do statement,
// pois o statement irá receber estes parâmetros por referência.
$login = "user";
$pass = "12345";

// O parâmetro "ss" sinaliza que os dois parametros a seguir são Strings
// Se fosse uma String e um Inteiro, seria "si" 
$stmt->bind_param("ss", $login, $pass);

// Executa o statement
$stmt->execute();

$login = "root";
$pass = "!@#$%";

$stmt->execute();

?>
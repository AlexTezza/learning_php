<?php

// Cria a conexão com o banco de dados
$conn = new mysqli("localhost", "root", "", "dbphp7");

// Testa a conexão
if ($conn->connect_error) {
    echo "Error: " . $conn->connect_error;
}

// Realiza a consulta no banco de dados
$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

// Percorre o resultado da consulta
while ($row = $result->fetch_assoc()) {
    // Adiciona a tupla no array
    array_push($data, $row);
}

// Transforma o array de objetos em um array de json
echo json_encode($data);

?>
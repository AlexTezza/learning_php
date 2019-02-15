<?php

// PDO TRANSACTION

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root");

// Inicia a transação
$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 1;

$stmt->execute(array($id));

// Finaliza a transação em casos de sucesso
$conn->commit();
echo "Excluido com sucesso"

// Finaliza a transação e não aplica as alterações realizadas durante a transação
// $conn->rollBack();
// echo "Houve um problema!"


?>
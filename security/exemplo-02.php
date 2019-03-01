<?php

// SQL Injection
// Testar com a seguinte url "/exemplo-02.php?id=3 or 1=1 -- "
// faz listar todos os registros, desconsidera id

$id = (isset($_GET["id"]))?$_GET["id"]:1;

// Medida de segurança para evitar SQL Injection
if (!is_numeric($id) || strlen($id) > 5) {
    exit("Pegamos você Verme insolente");
}

$conn = mysqli_connect("localhost", "root", "", "dbphp7");

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while($resultado = mysqli_fetch_object($exec)) {

    echo json_encode($resultado);

}

?>
<?php
session_start();
$hostname = "127.0.0.1";
$user = "root";
$senha = "root";
$bd = "sebo";

$conexao = new mysqli($hostname, $user, $senha, $bd);

if ($conexao->connect_errno) {
    echo json_encode(["total" => 0]);
    exit();
}

$sql = "SELECT COUNT(*) as total FROM `livro` WHERE `usuario`='" . $_SESSION['id'] . "'";
$resultado = $conexao->query($sql);
$row = $resultado->fetch_assoc();

echo json_encode(["total" => $row['total']]);
?>

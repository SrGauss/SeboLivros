<?php
session_start();

$hostname = "127.0.0.1";
$user = "root";
$password = "root";
$database = "sebo";

$conexao = new mysqli($hostname,$user,$password,$database);

if ($conexao -> connect_errno) {
    echo "Falha ao comunicar com banco de dados.". $conexao -> connect_error;
    exit();
}else{

    $user = $conexao -> real_escape_string($_POST['user']);
    $Senha = $conexao -> real_escape_string($_POST['PassSenha']);

    $Hash = hash('sha256', $Senha);

    $sql = "INSERT INTO `sebo`.`login`(`nome`, `senha`, `favorite`, `carrinho`) VALUES ('".$user."', '".$Hash."', '', '');";
    $dado = $conexao->query($sql);
        
        $conexao ->close();
        header("location: Login.php", true,301);
        exit();
    }

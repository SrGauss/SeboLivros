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

    $email = $conexao -> real_escape_string($_POST['email']);
    $senha = $conexao -> real_escape_string($_POST['Password']);

    $hash = hash('sha256', $senha);

    $sql = "INSERT INTO `votacaodosgames`.`logins`(`usuario`, `senha`,`cargo`) VALUES ('".$email."', '".$hash."','user');";
    $dado = $conexao->query($sql);
        
        $conexao ->close();
        header("location: index.php", true,301);
        exit();
    }
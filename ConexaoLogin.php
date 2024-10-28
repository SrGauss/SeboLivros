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

    $nome = $conexao -> real_escape_string($_POST['nome']);
    $senha = $conexao -> real_escape_string($_POST['Senha']);

    $hash = hash('sha256', $senha);

    $sql = "SELECT `id`,`nome`,`senha`,`image` FROM `login` WHERE `nome`='".$nome."' AND `senha`='".$hash."';";
    $dado = $conexao->query($sql);
    
    if ($dado->num_rows != 0) {
        $row = $dado -> fetch_array();
        $_SESSION['id'] = $row[0];
        $_SESSION['nome'] = $row[1];
        $_SESSION['image'] = $row[3];

        
        $conexao -> close();
        header("location: index.php",true,301);
        }
        else{
            session_start();
            $_SESSION['login_error'] = "Login falhou! Verifique seu nome de usuário e senha.";
            $conexao ->close();
            header("location: Login.php", true,301);
            exit();
    }
}

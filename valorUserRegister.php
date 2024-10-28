<?php
session_start();

$hostname = "127.0.0.1";
$user = "root";
$password = "root";
$database = "sebo";

$conexao = new mysqli($hostname, $user, $password, $database);

if ($conexao->connect_errno) {
    die("Falha ao comunicar com banco de dados: " . $conexao->connect_error);
}

$user = $conexao->real_escape_string($_POST['user'] ?? '');
$Senha = $conexao->real_escape_string($_POST['PassSenha'] ?? '');

if (empty($user) || empty($Senha)) {
    die("Usuário ou senha não informados.");
}

$Hash = hash('sha256', $Senha);

// Diretório para salvar as imagens
$diretorio = "uploadImages/";
if (!is_dir($diretorio)) {
    mkdir($diretorio, 0777, true);
}

$nome_img = '';
if (isset($_FILES["image1"]) && $_FILES["image1"]["error"] === 0) {
    $nome_img = $diretorio . basename($_FILES["image1"]["name"]);

    // Mover a imagem para o diretório
    if (!move_uploaded_file($_FILES["image1"]["tmp_name"], $nome_img)) {
        die("Erro ao mover a imagem.");
    }
} else {
    die("Erro no upload da imagem.");
}

// Inserir os dados na tabela
$sql = "INSERT INTO `login`(`nome`, `senha`, `image`, `favorite`, `carrinho`) VALUES ('$user', '$Hash', '$nome_img', '', '')";

if (!$conexao->query($sql)) {
    die("Erro ao inserir dados: " . $conexao->error);
}

$conexao->close();
header("Location: Login.php", true, 301);
exit();
?>

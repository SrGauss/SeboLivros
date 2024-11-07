<?php
$hostname = "127.0.0.1";
$user = "root";
$password = "root";
$database = "sebo";

$conexao = new mysqli($hostname, $user, $password, $database);

if ($conexao->connect_errno) {
    echo "Falha ao comunicar com banco de dados." . $conexao->connect_error;
    exit();
}

if (isset($_GET['genero']) && !empty($_GET['genero'])) {
    $genero = utf8_decode($conexao->real_escape_string($_GET['genero']));
    $sql = "SELECT `id`, `nomeLivro`, `preco`, `genero`, `imagem` FROM `livro` WHERE `genero` = '$genero' ORDER BY RAND();";
} else {
    $sql = "SELECT `id`, `nomeLivro`, `preco`, `genero`, `imagem` FROM `livro` ORDER BY RAND();";
}

$dado = $conexao->query($sql);

$output = "<div class='cards-container'>";
while ($row = mysqli_fetch_array($dado)) {
    $output .= "<div class='card'>
        <img class='image' src='{$row['imagem']}'>
        <span class='title'>" . utf8_encode($row['nomeLivro']) . "</span>
        <span class='price'>R$ {$row['preco']}</span>
        <button class='Car' data-id='{$row['id']}'><span style='pointer-events: none;' class='bi bi-cart'></span></button>
    </div>";
}
$output .= "</div>";


echo $output;

$conexao->close();
?>

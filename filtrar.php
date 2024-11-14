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
    $sql = "SELECT `id`, `nomeLivro`, `preco`, `desconto`, `genero`, `imagem`,`estoque` FROM `livro` WHERE `genero` = '$genero' ORDER BY RAND();";
} else {
    $sql = "SELECT `id`, `nomeLivro`, `preco`, `desconto`, `genero`, `imagem`,`estoque` FROM `livro` ORDER BY RAND();";
}

$dado = $conexao->query($sql);

echo "<div class='cards-container'>";

while ($row = mysqli_fetch_array($dado)) {

    $originalPrice = $row['preco'];
    $des = $row['desconto'];

        $valorDesconto = ($originalPrice * $des) / 100;
        $precoFinal = $originalPrice - $valorDesconto;

    echo "
    <form method='POST' action='Book.php' id='autoSubmitForm{$row['id']}'>
        <div class='card' onclick='document.getElementById(\"autoSubmitForm{$row['id']}\").submit();'>
            <img class='image' src='{$row['imagem']}'>
            <span class='title'>".utf8_encode($row['nomeLivro'])."</span>
            <span class='price'>R$ {$precoFinal}</span>
            <input type='hidden' id='View' name='View' value='{$row[0]}'>";
            
        if ($row['estoque'] > 0) {
        echo "
            <button type='button' class='Car' data-id='{$row['id']}' onclick='handleButtonClick(event, {$row['id']})'>
                <span style='pointer-events: none;' class='bi bi-cart'></span>
            </button>";
        }

        echo "
        </div>
    </form>";
}

echo "</div>";

echo "
<script>
    function handleButtonClick(event, id) {
        // Impede que o clique no botão acione o onclick da div
        event.stopPropagation();
        console.log('Botão clicado para o item ID:', id);
        // Lógica adicional para o botão
    }
</script>";

$conexao->close();
?>

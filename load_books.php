<?php
session_start();
$hostname = "127.0.0.1";
$user = "root";
$senha = "root";
$bd = "sebo";

$conexao = new mysqli($hostname, $user, $senha, $bd);

if ($conexao->connect_errno) {
    echo "Falha ao comunicar com banco de dados." . $conexao->connect_error;
    exit();
}

$limite = 3; // Número de registros por página
$offset = isset($_GET['offset']) ? (int)$_GET['offset'] : 0;

$sql = "SELECT * FROM `livro` WHERE `usuario`='" . $_SESSION['id'] . "' LIMIT $limite OFFSET $offset";
$resultado = $conexao->query($sql);

while ($row = mysqli_fetch_assoc($resultado)) {
    ?>
    <div class='card'>
        <div class='images'>
            <img src='<?php echo $row["imagem"]; ?>' alt=''>
        </div>
        <div class='caption'>
            <p class='Bookname'><?php echo utf8_encode($row["nomeLivro"]); ?></p>
            <h3 class='BookGender'><?php echo utf8_encode($row["genero"]); ?></h3>
            <h3 class='Author'><?php echo utf8_encode($row["autor"]); ?>&emsp; |</h3>
            <p class='preco'><b><?php echo $row["preco"]; ?></b></p>
            <p class='disconto'><b><del><?php echo $row["desconto"]; ?></del></b></p>
            <button class='view' data-id="<?php echo $row["id"]; ?>">Modificar</button>
            <button class='remove' data-id="<?php echo $row["id"]; ?>">Excluir</button>
        </div>
    </div>
    <?php
}

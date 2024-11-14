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
            <h3 class='BookGender'>|&emsp;<?php echo utf8_encode($row["genero"]); ?></h3>
            <h3 class='Author'><?php echo utf8_encode($row["autor"]); ?></h3>
            <p class='preco'><b><?php echo $row["preco"]; ?></b></p>
            <p class='disconto'><b><?php echo $row["desconto"]; ?></b></p>

            <form action="Visualizar.php" method="POST">
                <input type="hidden" id="View" name="View" value="<?php echo $row["id"]; ?>">
                <button class='view' data-id="<?php echo $row["id"]; ?>">Modificar</button>
            </form>

            <form action="Excluir.php" method="POST" onsubmit="return confirmSubmit(event);">
                <input type="hidden" id="Dell" name="Dell" value="<?php echo $row["id"]; ?>">
                <button class='remove' data-id="<?php echo $row["id"]; ?>">Excluir</button>
            </form>
        </div>
    </div>

    <?php
}

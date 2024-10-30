<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="LogoTrain.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="sstyleIIndex.css">


    <title>Estação dos Livros</title>
</head>
<body>

<!-- Barra de cima -->

<div class="UpBar">

<?php

session_start();

if (empty($_SESSION['nome'])){
    echo "<a class='User' href='Login.php'><span class='bi bi-person-circle'><strong><p> Bem vindo(a)</p></strong></span></a>";

} else {
    $Nome = $_SESSION['nome'];
    $Image = $_SESSION['image'];

    echo "<a class='User' href='Conta.php'><img class='userBorder' src='$Image'><p>".$Nome."</p></a>";

}

?>

    <a class="Kart" href="Carrinho.php"></a>
        <span id="bi" class="bi bi-cart"></span>
            <span class="QuantiCompras"><p>0</p></span>

    <span class="linha"></span>

    <form class="search" action="pesquisa.php" method="post">
        <input name="buscar" type="text" id="buscar" autocomplete="off" placeholder="O que você está procurando?">
        <button type="submit"><i class="bi bi-search"></i></button>
    </form>

    <img class="tremImg" src="Trem.png" alt="">

</div>



<!-- Barra de baixo -->

<div class="BottomBar">

    <a href="cadastroLivro.php" class="cBook">Cadastrar Livro</a>

</div>
    
</body>
</html>
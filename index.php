<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="LogoTrain.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styleIndex.css">


    <title>Estação dos Livros</title>
</head>
<body>

<!-- Barra de cima -->

<div class="UpBar">

    <a class="Kart" href="Carrinho.php"><span class="bi bi-cart"></span></a>

    <a class="User" href="Login.php"><span class="bi bi-person-circle"><p> Login</p></span></a>

    <form class="search" action="pesquisa.php" method="post">
        <input name="buscar" type="text" id="buscar" autocomplete="off" placeholder="O que você está procurando?">
        <button type="submit"><i class="bi bi-search"></i></button>
    </form>

</div>

<!-- Barra de baixo -->

<div class="BottomBar">

</div>
    
</body>
</html>
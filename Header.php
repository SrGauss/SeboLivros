<!-- Barra de cima -->

<div class="UpBar">

    <?php

    session_start();

    if (empty($_SESSION['nome'])){
        echo "<a class='User' href='Login.php'><span class='bi bi-person-circle'><strong><p class='userP1'> Bem vindo(a)</p></strong><h1 class='p2'>Entre ou cadastre-se</h1></span></a>";

    } else {
        $Nome = $_SESSION['nome'];
        $Image = $_SESSION['image'];

        echo "<a class='User2' href='Conta.php'><img class='userBorder' src='$Image'><p>".$Nome."</p></a>";

    }

    ?>

    <?php

        require_once 'connection.php';

        $sql_cart = "SELECT * FROM `carrinho`;";
        $all_cart = $conexao->query($sql_cart);

    ?>

    <a class="Star" href="Favorito.php"></a>
        <span id="biS" class="bi bi-star"></span>
            <p class="QuantiFavori" id="quantiFav">0</p>

    <a class="Kart" href="Carrinho.php"></a>
        <span id="bi" class="bi bi-cart"></span>
            <p class="QuantiCompras" id="quantiCompras"><?php echo mysqli_num_rows($all_cart); ?></p>

    <span class="linha"></span>

    <form class="search" action="pesquisa.php" method="post">
        <input name="buscar" type="text" id="buscar" autocomplete="off" placeholder="O que você está procurando?">
        <button type="submit"><i class="bi bi-search"></i></button>
    </form>

    <img class="tremImg" src="./imagensDoSite/Trem.png" alt="">

</div>



<!-- Barra de baixo -->

<div class="BottomBar">

    <a href="cadastroLivro.php" class="cBook">Cadastrar Livro</a>

</div>
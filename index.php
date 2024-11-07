<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./imagensDoSite/LogoTrain.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="StyleIndex.css">


    <title>Estação dos Livros</title>
</head>
<body>

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

    <i id="rede" class="bi bi-filter"></i>

    <select name="FiltroGenero" id="FiltroGenero" onchange="toggleRedeVisibility()">
            <option value="" disabled selected hidden>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Filtrar</option>
            <option value="Ficção">Ficção</option>
            <option value="Fantasia">Fantasia</option>
            <option value="Horror">Horror</option>
            <option value="Suspense">Suspense</option>
            <option value="Romance">Romance</option>
            <option value="Conto">Conto</option>
            <option value="Ficção Científica">Ficção Científica</option>
            <option value="Aventura">Aventura</option>
            <option value="Biografia">Biografia</option>
            <option value="Científico">Científico</option>
            <option value="Guias & Como fazer">Guias & Como fazer</option>
            <option value="Histórico">Histórico</option>
            <option value="Infantil">Infantil</option>
            <option value="Young adult">Young adult</option>
            <option value="Distopia">Distopia</option>
            <option value="Poesia">Poesia</option>
            <option value="Drama">Drama</option>
            <option value="Autoajuda">Autoajuda</option>
    </select>

    <div id="cardsContainer">
    <!-- Os cartões serão atualizados aqui -->
</div>

<script>
    function toggleRedeVisibility() {
        const rede = document.getElementById("rede");
        const select = document.getElementById("FiltroGenero");

        if (select.value) {
            // Torna o elemento invisível
            rede.style.display = "none";
        } else {
            // Torna o elemento visível novamente se nenhuma opção estiver selecionada
            rede.style.display = "inline";
        }
    }      

    document.getElementById("FiltroGenero").addEventListener("change", function() {
        var genero = this.value;
        var xhr = new XMLHttpRequest();
        
        xhr.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById("cardsContainer").innerHTML = this.responseText;
            }
        };

        xhr.open("GET", "filtrar.php?genero=" + encodeURIComponent(genero), true);
        xhr.send();
    });
</script>

<?php
include "filtrar.php";
?>

<script>

        var product_id = document.getElementsByClassName("Car");
       for(var i = 0; i<product_id.length; i++){
           product_id[i].addEventListener("click",function(event){
               var target = event.target;
               var id = target.getAttribute("data-id");
               var xml = new XMLHttpRequest();
               xml.onreadystatechange = function(){
                   if(this.readyState == 4 && this.status == 200){
                       var data = JSON.parse(this.responseText);
                       alert(data.in_cart);
                       document.getElementById("quantiCompras").innerHTML = data.num_cart ++;

                   }
               }

               xml.open("GET","connection.php?id="+id,true);
               xml.send();
            
           })
        }
        
</script>
    
</body>
</html>
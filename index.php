<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="LogoTrain.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="StyleIIndex.css">


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

    <img class="tremImg" src="Trem.png" alt="">

</div>



<!-- Barra de baixo -->

<div class="BottomBar">

    <a href="cadastroLivro.php" class="cBook">Cadastrar Livro</a>

</div>

    <select name="FiltroGenero" id="FiltroGenero">
            <option value="" disabled selected hidden>Gêneros</option>
            <option value="Ficção">Ficção</option>
            <option value="Fantasia">Fantasia</option>
            <option value="Horror">Horror</option>
            <option value="Suspense">Suspense</option>
            <option value="Romance">Romadnce</option>
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

<?php

$hostname = "127.0.0.1";
$user = "root";
$password = "root";
$database = "sebo";

$conexao = new mysqli($hostname,$user,$password,$database);

if ($conexao -> connect_errno) {
    echo "Falha ao comunicar com banco de dados.". $conexao -> connect_error;
    exit();
}else{

    $sql = "SELECT `id`,`nomeLivro`,`preco`,`genero`,`imagem` FROM `livro` ORDER BY RAND();";
    $dado = $conexao->query($sql);

    echo "<div class='cards-container'>";
    while($row = mysqli_fetch_array($dado)){

        echo "<div class='card'>
            <img class='image' src='$row[4]'>
            <span class='title'>".utf8_encode($row[1])."</span>
            <span class='price'>R$ $row[2]</span>
            
            <button class='Car' data-id='$row[0]'><span style='pointer-events: none;' class='bi bi-cart'></span></button>
            
        </div>";
    }
    echo "</div>";
    $conexao -> close();
}

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
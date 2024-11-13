<?php

require_once 'connection.php';

$sql_cart = "SELECT * FROM `carrinho`;";
$all_cart = $conexao->query($sql_cart);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./imagensDoSite/LogoTrain.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="KKart.css">


    <title>Carrinho</title>
</head>
<body>
    


<main>
    <h1>Itens no carrinho: <?php echo mysqli_num_rows($all_cart); ?></h1>
    <hr>
    <?php
    while($row_cart = mysqli_fetch_assoc($all_cart)){
        $sql = "SELECT * FROM `livro` WHERE `id`='".$row_cart['product_id']."';";
        $all_product = $conexao->query($sql);
        while($row = mysqli_fetch_assoc($all_product)){
    ?>
            <div class='card'>
                <div class='images'>
                    <img src='<?php echo $row["imagem"]; ?>' alt=''>
                </div>

                <div class='caption'>
                    <p class='rate'>

                    </p><br style="user-select: none;">
                    <p class='product_name'><?php echo utf8_encode($row["nomeLivro"]); ?></p>
                    <p class='preco'><b><?php echo $row["preco"]; ?></b></p>
                    <p class='disconto'><b><del>R$64</del></b></p>
                    <button class='remove' data-id="<?php echo $row["id"]; ?>">Tirar do carrinho</button>
                </div>
            </div>
    <?php
        }
    }
    ?>
</main>

<script>
        var remove = document.getElementsByClassName("remove");
        for(var i = 0; i<remove.length; i++){
            remove[i].addEventListener("click",function(event){
                var target = event.target;
                var cart_id = target.getAttribute("data-id");
                var xml = new XMLHttpRequest();
                xml.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                       target.innerHTML = this.responseText;
                       target.style.opacity = .3;
                    }
                }

                xml.open("GET","connection.php?cart_id="+cart_id,true);
                xml.send();
            })
        }
</script>

</body>
</html>
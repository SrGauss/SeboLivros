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


<?php
    include "Header.php";
?>
    

    <select name="FiltroGenero" id="FiltroGenero" onchange="toggleRedeVisibility()">
            <option value="" disabled selected hidden>Filtrar</option>
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
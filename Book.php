<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./imagensDoSite/LogoTrain.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="BookStyle.css">

    <title>Livro</title>

</head>
<body>
    
<?php
    include "Header.php";
?>



<?php

        $hostname = "127.0.0.1";
        $user = "root";
        $senha = "root";
        $bd = "sebo";

        $conexao = new mysqli($hostname,$user,$senha,$bd);

        if ($conexao -> connect_errno) {
            echo "Falha ao comunicar com banco de dados.". $conexao -> connect_error;
            exit();
        }else{

            $ValuePost = $_POST['View'];

            $sql= "SELECT `id`, `nomeLivro`, `autor`, `preco`, `desconto`, `anoPublicacao`, `genero`, `descricao`, `imagem`, `estoque` FROM `livro` WHERE `id`='".$ValuePost."';"; 
            $result = $conexao -> query($sql);
        
            while ($row = mysqli_fetch_array($result)) {

                echo "<div class='card'>

                    <div id='imgContainer'>
                        <img class='image' src='{$row['imagem']}'>
                    </div>
                        <strong><p class='title'>".utf8_encode($row['nomeLivro'])."</p></strong>

                        <div class='info'>
                            <p class='autor'>Por: ".utf8_encode($row['autor'])."</p>
                            <p class='ano'>|&nbsp; Publicação: ".$row['anoPublicacao']."</p>
                        </div>

                        <div class='descri-container'>
                            <p class='descri'>&emsp;".utf8_encode($row['descricao'])."</p>
                            <button class='leia-mais-btn'>Leia mais</button>
                        </div>

                        <div class='preco'>
                            <p class='price'>{$row['preco']}</p>
                        </div>
                        
                    </div>
                </form>";

                if ($row['estoque'] == "0"){
                    echo "<p class='OutEstoque'>Não disponivel</p>";
                }
                else if ($row['estoque'] != "0"){
                    echo "<p class='InEstoque'>Em estoque</p>";
                    echo "<input type='number' max='".$row['estoque']."' min='1' value='1' placeholder='Estoque' id='quantiEstoque' name='quantiEstoque'>";
                }
            }

            echo "</div>";

            }

?>


<script>

    document.addEventListener('DOMContentLoaded', function() {
        const descri = document.querySelector('.descri');
        const btn = document.querySelector('.leia-mais-btn');

        // Verifica se o conteúdo ultrapassa o max-height
        if (descri.scrollHeight > descri.clientHeight) {
            btn.style.display = 'block'; // Mostra o botão se o texto for cortado
        } else {
            btn.style.display = 'none'; // Esconde o botão se o texto couber
        }

        btn.addEventListener('click', function() {
            if (descri.classList.contains('expandido')) {
                descri.classList.remove('expandido');
                btn.textContent = 'Leia mais';
            } else {
                descri.classList.add('expandido');
                btn.textContent = 'Leia menos';
            }
        });
    });
</script>


</body>
</html>
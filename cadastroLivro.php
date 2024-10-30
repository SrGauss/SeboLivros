<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="LogoTrain.png" type="image/x-icon">

    <title>Cadastro Livro</title>

    <style>
    body{
        background-color: #363062;
    }

    .desc{
        resize: none;
    }

    .imgs{
        font-size: 11.5px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        top: 3px;
        left: 0px;
        color: transparent;
    }

    .imgs::-webkit-file-upload-button {
        border-radius: 4px;
        border: none;
        position: relative;
        padding: 7px;
    }

    .userImg{
        border: solid 2px black;
        border-radius: 7px;
        position: absolute;
        width: 100px;
        height: 140px;
        top: 150px;
        left: 150px;
    }

    .userBorder{
        border: solid 2px black;
        border-radius: 7px;
        position: absolute;
        width: 100px;
        height: 140px;
        top: 150px;
        left: 150px;
    }

    .back{
        background-color: #DBD3D3;
        position: absolute;
        height: 97.5%;
        width: 40%;
        border-radius: 50px;
        box-shadow: 3px 3px 3px #4D4C7D;
        user-select: none;
    }

    input[type="text"], input[type="password"] {
        padding: 15px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 15px;
        transition: 0.5s;
        position: relative;
        width: 350px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, 90%);
    }

    input[type="number"]{
        padding: 15px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 15px;
        transition: 0.5s;
        position: relative;
        width: 200px;
        top: 50%;
        left: 50%;
        transform: translate(-82%, 90%);
    }
    
    input[type="submit"] {
        background-color: #F99417;
        color: white;
        padding: 18px 20px;
        margin: 7px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        position: relative;
        top: -5px;
    }

    select{
        padding: 15px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 15px;
        transition: 0.5s;
        position: relative;
        width: 200px;
        top: 50%;
        left: 50%;
        transform: translate(-94%, 90%);
    }

    option{
        padding: 15px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 15px;
        transition: 0.5s;
        position: relative;
        width: 200px;
        top: 50%;
        left: 50%;
        transform: translate(-94%, 90%);
    }

    </style>

</head>
<body>
    
<?php
    session_start();

    if (empty($_SESSION['nome'])){
        header("Location: Login.php", true,301);
        exit();
    }
?>

    <span class="userBorder"></span>
    <img class="userImg" id="previewImg" src="" alt="" style="display:none";>

    <div class="back">
        <form action="cadastroLivro.php" method="post" enctype="multipart/form-data">
            <input type="text" placeholder="Nome livro">
            <br><br>
            <input type="text" placeholder="Autor">
            <br><br>
            <input type="number" placeholder="Ano de publicação" min="1800" max="2025">
            <br><br>
            <select name="generos" id="generos">
                <option value="" disabled selected hidden>Gêneros</option>
                <option value="ficcao">Ficção</option>
                <option value="fantasia">Fantasia</option>
                <option value="suspense">Suspense</option>
                <option value="romance">Romance</option>
                <option value="aventura">Aventura</option>
                <option value="biografia">Biografia</option>
                <option value="cientifico">Científico</option>
                <option value="historico">Histórico</option>
                <option value="infantil">Infantil</option>
                <option value="terror">Terror</option>
                <option value="poesia">Poesia</option>
                <option value="drama">Drama</option>
                <option value="autoajuda">Autoajuda</option>
            </select>
            <br>
            <textarea class="desc" placeholder="Descrição" name="descricao" id="descricao"></textarea>
            <br>
            <input class="imgs" type="file" accept="image/png, image/jpeg" name="image" id="image"/>
            <br><br>
            <input class="imgs" type="file" accept="application/pdf" name="pdf" id="pdf"/>

            <input value="Enviar" type="submit">
        </form>
    </div>

    <script>

        // Função para exibir a imagem selecionada no elemento img
        document.getElementById("image").addEventListener("change", function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const previewImg = document.getElementById("previewImg");
                    previewImg.src = e.target.result;
                    previewImg.style.display = "block";
                }
                reader.readAsDataURL(file);
            }
        });

    </script>



</body>
</html>
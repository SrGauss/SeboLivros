<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./imagensDoSite/LogoTrain.png" type="image/x-icon">
    <link rel="stylesheet" href="styleCadastroLLivro.css">

    <title>Cadastro Livro</title>

</head>
<body>
    
<?php
    session_start();

    if (empty($_SESSION['nome'])) {
        header("Location: Login.php", true, 301);
        exit();
    } else {}
?>

    <img class="userImg" id="previewImg" src="" alt="" style="display:none";>

    <div class="back">

        <form action="ValorCadastroLivro.php" method="post" enctype="multipart/form-data" onsubmit="return Confirma()">

            <input type="text" placeholder="Nome livro" id="nomeLivro" name="nomeLivro">
            <br><br>
            <input type="text" placeholder="Autor" id="Autor" name="Autor">
            <br><br>
            <input type="number" placeholder="Ano de publicação" min="1600" max="2025" id="anoPubli" name="anoPubli">
            <br><br>

            <input type="number" placeholder="Preço" id="preco" name="preco">

            <select name="generos" id="generos">
                <option value="" disabled selected hidden>Gêneros</option>
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

            <br>
            <textarea class="desc" placeholder="Descrição" name="descricao" id="descricao"></textarea>
            <br>
            <label for="image" class="imgs" id="labelImage">Selecionar Imagem</label>
            <input style="display: none;" type="file" accept="image/png, image/jpeg" name="image" id="image"/>
            <br>
            <input type="number" placeholder="Estoque" id="estoque" name="estoque">

            <input value="Cadastrar" type="submit">
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

            // Função para monitorar seleção de arquivos e mudar a cor do texto dos labels
        function updateLabelColor(inputId, labelId) {
            const input = document.getElementById(inputId);
            const label = document.getElementById(labelId);

            input.addEventListener('change', function () {
                // Muda para verde se um arquivo foi selecionado, cinza se não
                if (input.files.length > 0) {
                    label.style.color = 'green';
                    label.style.textDecoration = 'underline';
                } else {
                    label.style.color = 'gray';
                    label.style.textDecoration = 'none';
                }
            });
        }

        // Aplica a função aos inputs de imagem e PDF
        updateLabelColor('image', 'labelImage');

        
        function Confirma() {
            var txt;
            if (confirm("Confira se o nome do jogo foi digitado corretamente")) {
                return true;
            } else {
                return false;
            }

        }

</script>



</body>
</html>
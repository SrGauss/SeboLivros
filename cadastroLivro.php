<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="LogoTrain.png" type="image/x-icon">
    <link rel="stylesheet" href="StyleCadastroLivro.css">

    <title>Cadastro Livro</title>

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
            <label for="image" class="imgs" id="labelImage">Selecionar Imagem</label>
            <input style="display: none;" type="file" accept="image/png, image/jpeg" name="image" id="image"/>
            <br><br>
            <label class="PDF" for="pdf" id="labelPdf">Selecionar PDF</label>
            <input style="display: none;" type="file" accept="application/pdf" name="pdf" id="pdf"/>

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
        updateLabelColor('pdf', 'labelPdf');

</script>



</body>
</html>
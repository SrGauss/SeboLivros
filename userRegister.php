<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="" type="image/x-icon">
        <link rel="stylesheet" href="IndexStyle.css">
        <link rel="stylesheet" href="RegisterStyle.css">


        <title>Cadastro</title>

    </head>
    <body>

<div class="login-card">
    <div class="card-header">
        <div class="log"><strong>Cadastro</strong></div>
    </div>
    <form action="valorUserRegister.php" method="post" enctype="multipart/form-data">
            <div class="form-group">

                <span class="userBorder"></span>
                <img class="userImg" id="previewImg" src="" alt="" style="display:none";>

                <label style="position:relative;top:-55px;" for="user">Nome:</label>
                <input  required="" name="user" id="user" type="text">
            </div>

            <div class="form-group">
                <label style="position:relative;top:-55px;" for="PassSenha">Senha:</label>
                <input required="" name="PassSenha" id="PassSenha" type="password">

                <input type="checkbox" onclick="showSenha()">

                <input class="imgs" type="file" accept="image/png, image/jpeg" name="image1" id="image1"/><br>

            </div>
                <div class="form-group">
                <input value="Enviar" type="submit">
            </div>
    </form>

  <img class="imagem" src="2-removebg-preview.png" alt="">

    <?php
        session_start();
        if (isset($_SESSION['login_error'])) {
            echo "<p class='erro' style='color:red;'>" . $_SESSION['login_error'] . "</p>";
            unset($_SESSION['login_error']);
        }
    ?>

    <script>

        // Função para exibir a imagem selecionada no elemento img
        document.getElementById("image1").addEventListener("change", function(event) {
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

    <script>
            function showSenha() {
        var x = document.getElementById("PassSenha");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
        }
    </script>
    
</div>
                
    </body>
</html>
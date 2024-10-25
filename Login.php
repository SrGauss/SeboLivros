<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="" type="image/x-icon">
        <link rel="stylesheet" href="IndexStyle.css">


        <title>Login</title>

<style>

@media only screen and (max-width: 1366px) {

body{
  background-color: #363062;
    background-position: center;
    font-family: "Motiva Sans",Arial,Helvetica,sans-serif;
  }
    
    .login-card {
width: 240px;
padding: 60px;
border: 1px solid #1b2838;
border-radius: 20px;
background-color: #4D4C7D;
box-shadow: 5px 5px 7px black;
position: absolute;
top: 50%;
left: 50%;
transform: translate(70%, -50%);
}

.card-header {
text-align: center;
margin-bottom: 150px
}

.card-header .log {
margin: 0;
font-size: 30px;
color: #F99417;
position: absolute;
}

.form-group {
margin-bottom: 14px;
position: relative;
top: -30px;
}

label {
font-size: 18px;
margin-bottom: 5px;
color: #c0c0c0;
user-select: none;
}

input[type="text"], input[type="password"] {
width: 100%;
padding: 13px;
font-size: 16px;
border: 1px solid #ccc;
border-radius: 4px;
transition: 0.5s;
position: relative;
top: -49px;
left: -15px;
}

input[type="submit"] {
width: 100%;
background-color: #F99417;
color: white;
padding: 18px 20px;
margin: 7px 0;
border: none;
border-radius: 4px;
cursor: pointer;
position: relative;
top: -40px;
}

#A{
width: 50%;
background-color: #F99417;
color: white;
padding: 12px 7px;
margin: 1px 0;
border: none;
border-radius: 4px;
cursor: pointer;
position: relative;
top: -15px;
font-size: 15px;
}

.sla{
margin: 0;
font-size: 21px;
color: white;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, 800%);
}

input[type="submit"]:hover {
background-color: #F99417;
transition: all ease 0.2s;
}

}

</style>

    </head>
    <body>

<div class="login-card">
    <div class="card-header">
        <div class="log"><strong>Iniciar Sessão</strong></div>
    </div>
    <form action="valores.php" method="post">
            <div class="form-group">
            <label style="position:relative;top:-55px;" for="username">Email / Usuário:</label>
            <input  required="" name="user" id="user" type="text">
            </div>
            <div class="form-group">
            <label style="position:relative;top:-55px;" for="password">Senha:</label>
            <input required="" name="Password" id="Password" type="password">
                <input type="checkbox" onclick="showSenha()">
            </div>
            <div class="form-group">
            <input value="Enviar" type="submit">
            </div>
    </form>
    <p class="sla">Primeira vez aqui?</p>
    <center><a style="position:relative;top:55px;" href="CadastroUser.php"><button id="A">Cadastrar</button></a></center>

  <img src="" alt="">

    <?php
session_start();
if (isset($_SESSION['login_error'])) {
    echo "<p class='erro' style='color:red;'>" . $_SESSION['login_error'] . "</p>";
    unset($_SESSION['login_error']);
}
?>

  <script>
    function showSenha() {
  var x = document.getElementById("Password");
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="LogoTrain.png" type="image/x-icon">


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

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="LogoTrain.png" type="image/x-icon">
    <link rel="stylesheet" href="StyleCOnta.css">

    <title>Conta</title>
</head>

<body>
    

<!-- Barra Lateral -->

<div class="LeftBar">

    <?php
    session_start();

    if (empty($_SESSION['nome'])){
        // Logado??? Não?? Tchau, bb.
        header("Location: index.php", true,301);
        exit();
    } else {
        $Nome = $_SESSION['nome'];
        $Image = $_SESSION['image'];

        echo "<img class='UserIMG' src='$Image'>";
        echo "<p class='UserNAME'>".$Nome."</p>";
    }
    ?>

    <a href="javascript:history.back()"><button class="back"><p>←</p></button></a>

    <a href="sair.php" class="Exit"><button>Sair da conta</button></a>
    
</div>

</body>
</html>
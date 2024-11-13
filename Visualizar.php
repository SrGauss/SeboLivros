<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilo.css">

    <title>Visualizar</title>
</head>

<style>
    table{
    position: relative;
    top: 200px; 
    left: 330px; 
    height: 104px;
    width: 280px;
    font-size: 19px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    color: black;
}

td button{
    height: 30px;
    width: 78px;
    color: white;
    text-shadow: 1px 1px 1px black;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}

td button:hover{
    cursor: pointer;
}

th{
    text-align: center;
}


tr, td, th {
    border-bottom:  1.5px solid black;
    padding: 10px;
}

button p{
    position: relative;
    top: -15px;
    left: 24px;
}
span{
    position: absolute;
    top: 62%; 
    left: 34.5%;
    font-size: 19px;
    transform: translate(-50%, -50%);
    font-family: Verdana, Geneva, Tahoma, sans-serif; 
}
.cadastro{
    position: absolute;
    top: 54.5%; 
    left: 33.5%;
    font-size: 19px;
    transform: translate(-50%, -50%);
    color: green;
    font-family: Verdana, Geneva, Tahoma, sans-serif; 
}
.Ncadastro{
    position: absolute;
    top: 50.5%; 
    left: 33.5%;
    font-size: 19px;
    transform: translate(-50%, -50%);
    color: red;
    font-family: Verdana, Geneva, Tahoma, sans-serif; 
}
input{
    position: absolute;
    top: 60%; 
    left: 33%;
    font-size: 19px;
    transform: translate(-50%, -50%);
    border: solid 1px black;
}
button{
    position: absolute;
    top: 60%; 
    left: 45%;
    font-size: 19px;
    transform: translate(-50%, -50%);
    border: solid 1px black;
}

</style>

<a href="sair.php" class="Exit"><button>Sair</button></a>

<a href="Segunda.php"><button class="Back">
    <p>Voltar</p>
    </button></a>

<body>

    <?php
        session_start();

        $hostname = "127.0.0.1";
        $user = "root";
        $senha = "root";
        $bd = "sebo";

        $conexao = new mysqli($hostname,$user,$senha,$bd);

        if ($conexao -> connect_errno) {
            echo "erro" . $conexao -> connect_error;
            header("location: index.php",true,301);
            exit();
            }
        else{
            $sql= "SELECT `id`, `nomeLivro`, `autor`, `preco`, `desconto`, `anoPublicacao`, `genero`, `descricao`, `imagem`, `estoque`, `usuario` FROM `livro` WHERE `id`='".$_POST['View']."';"; 
            $result = $conexao -> query($sql);

            echo "";
                    echo "<table>";
                    echo "<tr>";
                        echo "<th>Id&emsp;&emsp;&emsp;&emsp;</th>";
                        echo "<th>Nome&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>";
                        echo "<th>Autor&emsp;&emsp;&emsp;</th>";
                        echo "<th>Preço&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>";
                    echo "</tr>";

            while($row = mysqli_fetch_array($result)){          
                echo "<tr>";
                         echo "<td>&ensp;$row[0]</td>";
                         echo "<td>".utf8_encode($row[1])."</td>";
                         echo "<td>".utf8_encode($row[2])."</td>";
                         echo "<td>&ensp;$row[3]</td>";
              
            }

            $conexao->close();

        }
        
    ?>

</body>
</html>
<?php
session_start();

if(empty($_POST['nomeLivro'])){
    header("location: cadastroLivro.php",true,301);
    exit();
}else{

    $hostname = "127.0.0.1";
    $user = "root";
    $password = "root";
    $database = "sebo";

    $conexao = new mysqli($hostname, $user, $password, $database);

    if ($conexao->connect_errno) {
        echo "Falha ao comunicar com banco de dados: " . $conexao -> connect_error;
        exit();
    }

    else{

            $nomeLivro = utf8_decode($conexao->real_escape_string($_POST['nomeLivro']));
            $autor = utf8_decode($conexao->real_escape_string($_POST['Autor']));
            $preco = utf8_decode($conexao->real_escape_string($_POST['preco']));
            $anoPublicacao = utf8_decode($conexao->real_escape_string($_POST['anoPubli']));
            $genero = utf8_decode($conexao->real_escape_string($_POST['generos']));
            $desc = utf8_decode($conexao->real_escape_string(nl2br($_POST["descricao"])));
            $estoque = utf8_decode($conexao->real_escape_string($_POST['estoque']));
        
            // Diretório para salvar as imagens
            $diretorio_imagem = "bookImages/";
            if (!is_dir($diretorio_imagem)) {
                mkdir($diretorio_imagem, 0777, true);
            }
        
            $nome_img = '';
            if (isset($_FILES["image"]) && $_FILES["image"]["error"] === 0) {
                // Sanitizar o nome da imagem
                $nome_img = utf8_decode($conexao->real_escape_string(basename($_FILES["image"]["name"])));
                $nome_img = $diretorio_imagem . $nome_img;
        
                if (!move_uploaded_file($_FILES["image"]["tmp_name"], $nome_img)) {
                    exit();
                }
            } else {
                exit();
            }
    

            // Inserir os dados na tabela
            $sql = "INSERT INTO `livro`(`nomeLivro`, `autor`,`preco`, `anoPublicacao`, `genero`, `descricao`, `imagem`, `estoque`, `usuario`) 
                    VALUES ('".$nomeLivro."', '".$autor."','".$preco."', '".$anoPublicacao."', '".$genero."', '".$desc."', '".$nome_img."', '".$estoque."', '".$_SESSION['id']."')";

            if (!$conexao->query($sql)) {
                die("Erro ao inserir dados: " . $conexao->error);
            }

            $conexao->close();
            header("Location: index.php", true, 301);
            exit();
                }
            }

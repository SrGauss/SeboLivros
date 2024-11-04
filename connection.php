<?php
        
    $hostname = "127.0.0.1";
    $user = "root";
    $senha = "root";
    $bd = "sebo";

    $conexao = new mysqli($hostname,$user,$senha,$bd);

    if (isset($_GET["id"])) {

    $product_id = $_GET["id"];
    $sql = "SELECT * FROM `carrinho` WHERE `product_id` = '".$product_id."';";
    $result = $conexao -> query($sql);
    $total_cart = "SELECT * FROM `carrinho`;";
    $total_cart_result = $conexao->query($total_cart);
    $cart_num = mysqli_num_rows($total_cart_result);

        if(mysqli_num_rows($result) > 0){
            $in_cart = "Já está no carrinho";

            echo json_encode(["num_cart"=>$cart_num,"in_cart"=>$in_cart]);
        }else{
                $insert = "INSERT INTO `sebo`.`carrinho`(`product_id`) VALUES ('".$product_id."');";
                if($conexao->query($insert) === true){
                    $in_cart = "Adicionado ao carrinho";
                    echo json_encode(["num_cart"=>$cart_num,"in_cart"=>$in_cart]);
                }
            }
        }

    if(isset($_GET["cart_id"])){
        $product_id = $_GET["cart_id"];
        $sql = "DELETE FROM carrinho WHERE product_id=".$product_id;
    
        if($conexao->query($sql) === TRUE){
            echo "Removido do carrinho";
        }
    }

?>
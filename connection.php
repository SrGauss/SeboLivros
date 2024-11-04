<?php

//conexao banco de dandos
if (isset($_GET["id"])) {
        
    $hostname = "127.0.0.1";
    $user = "root";
    $senha = "root";
    $bd = "sebo";

    $conexao = new mysqli($hostname,$user,$senha,$bd);

    if ($conexao -> connect_errno) {
     echo "erro" . $conexao -> connect_error;
    }
    else{
        $product_id = $_GET["id"];

    if ($product_id != "") {
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
    $conexao ->close();
}
}

?>
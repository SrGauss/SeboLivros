<?php

//lets make a connection with Addtocarrinho database

$servername = "localhost";
$username = "root";
$password = "root";
$db = "sebo";

$conn = new mysqli($servername,$username,$password,$db);

if(isset($_GET["id"])){
    $product_id = $_GET["id"];
    $sql = "SELECT * FROM `carrinho` WHERE `product_id` = '".$product_id."';";
    $result = $conn->query($sql);

}

?>
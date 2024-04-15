<?php 
require "../../config/DB_PRODUTOS.php";
include "../controller/CartController.php";

$cartController = new CartController();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_to_cart'])) {
    // Processar a adição do produto ao carrinho
    $code = $_POST['product_code'];
    $cartController->addCart($code, $name_product, $quantity_product, $price_product);

    // Redirecionar para o CartView.php
   header("Location: ../view/CartView.php");
    exit();
}
?> 

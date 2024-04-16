<?php 
require "../../config/DB_PRODUTOS.php";
include "CartController.php";

$cartController = new CartController();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_to_cart'])) {
    // Processar a adição do produto ao carrinho
    $code = $_POST['product_code'];
    
    $index = array_search($code, $DB_PRODUTOS['code']);
    $name_product = $DB_PRODUTOS['name_product'][$index];
    $quantity_product = $DB_PRODUTOS['quantity_product'][$index];
    $price_product = $DB_PRODUTOS['price_product'][$index];

    $cartController->addCart($code, $name_product, $quantity_product, $price_product);
    $addItem();
    // Redirecionar para o CartView.php
   header("Location: ../view/CartView.php");
    exit();
}
?> 

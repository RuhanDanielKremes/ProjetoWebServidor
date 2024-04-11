<?php

include 'CartController.php';

$cartController = new CartController();

// Verificar se o formulário de adicionar/remover itens foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar se um item foi adicionado ao carrinho
    if (isset($_POST['add_to_cart'])) {
        // Adicionar item ao carrinho
        $code= $_POST['code'];
        $name_product = $_POST['name_product'];
        $quantity_product = $_POST['quantity_product'];
        $price_product = $_POST['price_product'];
        $cartController->addCart($code, $name_product, $quantity_product, $price_product);
    }
    // Verificar se um item foi removido do carrinho
    elseif (isset($_POST['remove_from_cart'])) {
        // Remover item do carrinho
        $code= $_POST['code'];
        $cartController->removerCart($code);
    }
}

// Incluir o cart_view.php para exibir o carrinho de compras
include 'cart_view.php';
?>



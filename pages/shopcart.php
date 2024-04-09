<?php

include 'CartController.php';

$cartController = new CartController();

// Verificar se o formulário de adicionar/remover itens foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar se um item foi adicionado ao carrinho
    if (isset($_POST['add_to_cart'])) {
        // Adicionar item ao carrinho
        $produto_id = $_POST['produto_id'];
        $produto_nome = $_POST['produto_nome'];
        $quantidade = $_POST['quantidade'];
        $preco = $_POST['preco'];
        $cartController->addCart($produto_id, $produto_nome, $quantidade, $preco);
    }
    // Verificar se um item foi removido do carrinho
    elseif (isset($_POST['remove_from_cart'])) {
        // Remover item do carrinho
        $produto_id = $_POST['$produto_id'];
        $cartController->removerCart($produto_id);
    }
}

// Incluir o cart_view.php para exibir o carrinho de compras
include 'cart_view.php';
?>



<?php

include 'CartModel.php';

class CartController {

    private $cartModel;
    

    function __construct() {
        $this->cartModel = new CartModel(); // Inicializa o modelo do carrinho de compras
    }

    function addCart($code, $name_product, $quantity_product, $price_quantity) {
        // Adiciona um item ao carrinho
        $this->cartModel->addItem($code, $name_product, $quantity_product, $price_quantity);
    }

    function removerCart($code) {
        // Remove um item do carrinho
        $this->cartModel->removerItem($code);
    }

    function mostrarCart() {
        // Exibe o carrinho de compras
        $cartItems = $this->cartModel->getCartItems();
        $total = $this->cartModel->calculaTotal();
        include 'cart_view.php'; // visualização do carrinho de compras
    }

    function limparCart() {
        // Limpa o carrinho de compras
        $this->cartModel->limparCart();
    }

    function getCartItems() {
        // Retorna os itens do carrinho usando o método correspondente do modelo
        return $this->cartModel->getCartItems();
    }

    function getTotal() {
        // Retorna o total do carrinho usando o método correspondente do modelo
        return $this->cartModel->calculaTotal();
    }
}
?>

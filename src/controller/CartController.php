<?php

require_once ('../model/CartModel.php');

class CartController {
    
    private $cartModel;
    
    public function __construct() {
        $this->cartModel = new CartModel(); // Inicializa o modelo do carrinho de compras
    }

    function addCart($produto_id, $quantidade) {
        // Adiciona um item ao carrinho
        $this->cartModel->addItem($produto_id, $quantidade);
    }

    function removerCart($produto_id) {
        // Remove um item do carrinho
        $this->cartModel->removerItem($produto_id);
    }

    public function mostrarCart()
    {
        // Exibe o carrinho de compras
        $cartItems = $this->cartModel->getCartItems();
        $total = $this->cartModel->calculaTotal();
        include '../view/CartView.php'; // visualização do carrinho de compras
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


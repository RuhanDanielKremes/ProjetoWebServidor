<?php

include 'CartModel.php';

class CartController {

    private $cartModel;
    

    public function __construct() {
        $this->cartModel = new CartModel(); // Inicializa o modelo do carrinho de compras
    }

    public function addCart($produto_id, $produto_nome, $quantidade, $preco) {
        // Adiciona um item ao carrinho
        $this->cartModel->addItem($produto_id, $produto_nome, $quantidade, $preco);
    }

    public function removerCart($produto_id) {
        // Remove um item do carrinho
        $this->cartModel->removerItem($produto_id);
    }

    public function mostrarCart() {
        // Exibe o carrinho de compras
        $cartItems = $this->cartModel->getCartItems();
        $total = $this->cartModel->calculaTotal();
        include 'cart_view.php'; // visualização do carrinho de compras
    }

    public function limparCart() {
        // Limpa o carrinho de compras
        $this->cartModel->limparCart();
    }

    
}
?>

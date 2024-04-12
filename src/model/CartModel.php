<?php

// Métodos para manipular o carrinho de compras

class CartModel {
    
    private $cartItems = array(); // Array para armazenar os itens no carrinho

    public function addItem($produto_id, $produto_nome, $quantidade, $preco) {
        // Adicionar um novo item ao carrinho
        $this->cartItems[$produto_id] = array(
            'produto_id' => $produto_id,
            'produto_nome' => $produto_nome,
            'quantidade' => $quantidade,
            'preco' => $preco
        );
    }

    public function removerItem($produto_id) {
        // Remover um item do carrinho
        if (isset($this->cartItems[$produto_id])) {
            unset($this->cartItems[$produto_id]);
        }
    }

    public function getCartItems() {
        // Obter os itens no carrinho
        return $this->cartItems;
    }

    public function calculaTotal() {
        // Calcular o total do carrinho
        $total = 0;
        foreach ($this->cartItems as $item) {
            $total += $item['quantidade'] * $item['preco'];
        }
        return $total;
    }

    public function limparCart() {
        // Limpar o carrinho
        $this->cartItems = array();
    }

}
?>

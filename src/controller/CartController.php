<?php

include '../model/CartModel.php';

 function addLineInMatrix($image, $name, $price, $quantity, $code){
    if(!isset($GLOBALS['matrix'])){
        //inicializando a matriz caso não exista
        $GLOBALS['matrix'] = array();
    }

    //criando uma linha com os valores recebidos através do botão adicionar ao carrinho
    $newLine = array(
        'image_product_cart' => $image,
        'name_product_cart' => $name,
        'price_product_cart' => $price,
        'quantity_product_cart' => $quantity,
        'code_product_cart' => $code
    );

    $GLOBALS['matrix'][] = $newLine;

}
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
        include 'view/cart_view.php'; // visualização do carrinho de compras
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

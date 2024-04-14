<?php
require '../model/ProductAdminModel.php';

// Verificar se o formulário de adição de produto foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_product"])) {
    // Criar uma instância do modelo de produto
    $productModel = new product_model();

    // Receber os parâmetros do formulário
    $image = $_POST['img-product']; 
    $name= $_POST['name-product'];
    $quantity = $_POST['quantity-product'];
    $price = $_POST['price-product'];
    $code = $_POST['code'];

    // Chamar o método para adicionar um novo produto
    $productModel->add_product($image, $name, $quantity, $price, $code);
}
?>;


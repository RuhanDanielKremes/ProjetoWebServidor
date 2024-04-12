<?php
require '../model/ProductAdminModel.php';

// Verificar se o formulário de adição de produto foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Criar uma instância do modelo de produto
    $productModel = new product_model();

    // Receber os parâmetros do formulário
    $image = $_FILES['img-product']['name']; // Nome do arquivo de imagem enviado
    $name= $_POST['name-product'];
    $quantity = $_POST['quantity-product'];
    $price = $_POST['price-product'];
    $code = $_POST['code'];

    // Chamar o método para adicionar um novo produto
    $produtoModel->add_product($image, $name, $quantity, $price, $code);
}
?>

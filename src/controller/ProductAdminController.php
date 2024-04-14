<?php
session_start();

require '../model/ProductAdminModel.php';

// Verificar se o formulário de adição de produto foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_product"])) {
    $path_dir = "../../public/images/";

    $filename = basename($_FILES['img-product']['name']);
    $path_file = $path_dir . $filename;
    
    // Move o arquivo temporário para o diretório de destino
    if (move_uploaded_file($_FILES['img-product']['tmp_name'], $path_file)) {
        // Criar uma instância do modelo de produto
        $productModel = new product_model();

        // Receber os parâmetros do formulário
        $image = $path_file;
        $name = $_POST['name-product'];
        $quantity = intval($_POST['quantity-product']);
        $price = floatval($_POST['price-product']);
        $code = $_POST['code'];

        // Chamar o método para adicionar um novo produto
        $productModel->add_product($image, $name, $quantity, $price, $code);
        $_SESSION['sucess'] = true;

    } else {
        echo "Ocorreu um erro ao enviar o arquivo.";
    }
}

if(isset($_SESSION["sucess"]) && $_SESSION['sucess'] === true) {
    echo '
        <script> 
            alert("Produto adicionado!");
        </script>
    ';

    unset($_SESSION['sucess']);
}
header('Location: ../view/ProductAdminView.php');
exit;
?>

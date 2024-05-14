<?php
session_start();

require '../model/ProductAdminModel.php';
require '../../config/DB_PRODUTOS.php';
include '../../config/DB_PRODUTOS_EXCLUIDOS.php';
// Verificar se o formulário de adição de produto foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_product"])) {
    $path_dir = "../../public/images/";
    //reutilizar isso e colocar função com caracteres especiais 
    $filename = basename($_FILES['img-product']['name']);
    $path_file = $path_dir . $filename;
    
    $code = $_POST['code'];
    if(!(array_search($code, $DB_PRODUTOS['code']))){
        // Move o arquivo temporário para o diretório de destino
        if (move_uploaded_file($_FILES['img-product']['tmp_name'], $path_file)) {
            
            $productModel = new product_model();
    
            $image = $path_file;
            $name = $_POST['name-product'];
            $quantity = intval($_POST['quantity-product']);
            $price = floatval($_POST['price-product']);
    
            // Chamar o método para adicionar um novo produto
            $productModel->add_product($image, $name, $quantity, $price, $code);
        } else {
            echo "Ocorreu um erro ao enviar o arquivo.";
        }
    }else{
        echo "Esse produto já existe na base de dados";
    }
    }
    

    if(isset($_POST['delete-product'])){
        $code = $_POST['code-input'];
        $index = array_search($code, $DB_PRODUTOS['code']);
        //Puxando o usuário que deletou o produto
        $userDelete = $_SESSION['name'];
        //histórico de produtos excluidos
        array_push($DB_PRODUTOS_EXCLUIDOS['image_product'], $DB_PRODUTOS['image_product'][$index]);
        array_push($DB_PRODUTOS_EXCLUIDOS['name_product'], $DB_PRODUTOS['name_product'][$index]);
        array_push($DB_PRODUTOS_EXCLUIDOS['price_product'], $DB_PRODUTOS['price_product'][$index]);
        array_push($DB_PRODUTOS_EXCLUIDOS['quantity_product'], $DB_PRODUTOS['quantity_product'][$index]);
        array_push($DB_PRODUTOS_EXCLUIDOS['code'], $code);
        array_push($DB_PRODUTOS_EXCLUIDOS['user_delete'], $userDelete);
        
        file_put_contents('../../config/DB_PRODUTOS_EXCLUIDOS.php', '<?php $DB_PRODUTOS_EXCLUIDOS = ' . var_export($DB_PRODUTOS_EXCLUIDOS, true) . ';');
        
        unset($DB_PRODUTOS['image_product'][$index]);
        unset($DB_PRODUTOS['name_product'][$index]);
        unset($DB_PRODUTOS['price_product'][$index]);
        unset( $DB_PRODUTOS['quantity_product'][$index]);
        unset($DB_PRODUTOS['code'][$index]);

        file_put_contents('../../config/DB_PRODUTOS.php', '<?php $DB_PRODUTOS = ' . var_export($DB_PRODUTOS, true) . ';');


    }

header('Location: ../view/ProductAdminView.php');
exit;
?>

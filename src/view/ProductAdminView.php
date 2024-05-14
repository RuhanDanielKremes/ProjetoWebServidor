<!DOCTYPE html>
<html lang="en">

<?php include "../../public/header.php"; ?>
<?php require_once('../controller/AdminControllerTeste.php');?>
<link rel="stylesheet" href="../../public/css/styleAdminProducts.css">

<div class="admin-product">
    <div class="add-product">
        <h1 class="tittle" >Adicionar Produto</h1>
        <form action="" method="post" enctype="multipart/form-data"> 
            <!-- 
            <label for="img-product">Imagem:</label>
            <input type="file" name="img-product" id="img-product" accept="image/*" required><br>
            --->
            <label for="name-product">Nome:</label>
            <input type="text" name="name-product" id="name-product" required><br>
            
            <label for="quantity-product">Quantidade:</label>
            <input type="number" name="quantity-product" id="quantity-product" required><br>
            
            <label for="price-product">Preço Unitário:</label>
            <input type="number" name="price-product" id="price-product" step="0.01" required><br>
            
            <label for="code">Código:</label>
            <input type="text" name="code" id="code" required><br>
            
            <input class="btn" type="submit" name="add_product" value="Adicionar">

    	    <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_product"])) {
    
                    $controller = new ProductController();

                   
                        $name = $_POST['name-product'];
                        $quantity = intval($_POST['quantity-product']);
                        $price = floatval($_POST['price-product']);
                        $code = $_POST['code'];
                        
                        if ($controller->insertINTO($name, $quantity, $price, $code)) {
                            echo "Produto adicionado com sucesso!";
                        } else {
                            echo "Erro ao adicionar produto.";
                        }
                    
                }
            ?>
        </form>    
    </div>
    <div class="del-product">
        <h1 class="tittle">Deletar produto</h1>
        <table>
            <thead>
                <tr>
                    <th>Imagem</th>
                    <th>Nome</th>
                    <th>Quantidade</th>
                    <th>Preço Unitário</th>
                    <th>Código</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php
    
                $controller = new ProductController();
                $result = $controller->getAll();
        
                if(!empty($result)){
                    foreach ($result as $data) {
                        ?>
                        <tr>
                            <td>teste</td>
                            <td> <?php echo $data['product_name']?> </td> 
                            <td> <?php echo $data['product_quantity']?> </td> 
                            <td> <?php echo $data['product_price']?> </td> 
                            <td>teste</td>
                            <form action="" method="post">
                                <td> 
                                    <button class="btn" type="submit" name="delete-product">
                                        <input type="hidden" name="code-input" value="<?php echo $code; ?>">
                                        <img src="../../public/images/remove.png" name='delete-product'>  <!-- Desenvolver funçao de deletar puxando pelo código"-->
                                    </button>
                                </td>
                            </form>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>


</html>
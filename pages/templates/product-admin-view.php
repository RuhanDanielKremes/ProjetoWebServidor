<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "header.php"; ?>
        <div class="admin-product">
            <div class="add-product">
                <h1>Adicionar Produto</h1>
                <form action="product-admin-controller" method="post"> 

                    <label for="img-product">Insira a imagem</label>
                    <input type="file" name="img-product" id="img-product" required> 
                    
                    <label for="name-product">Nome:</label>
                    <input type="text" name="name-product" id="name-product" required><br>

                    <label for="quantity-product">Quantidade:</label>
                    <input type="number" name="quantity-product" id="quantity-product" required><br>

                    <label for="price-product">Preço:</label>
                    <input type="number" name="price-product" id="price-product" step="0.01" required><br>

                    <label for="code">Código:</label>
                    <input type="text" name="code" id="code" required><br>

                    <input type="submit" value="Adicionar Produto">

                </form>    
            </div>
            <div class="edit-product">
                <h1>Editar produto</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Imagem</th>
                            <th>Nome</th>
                            <th>Quantidade</th>
                            <th>Preço</th>
                            <th>Código</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require 'DB.php';
                        foreach ($DB_PRODUTOS['image-product'] as $index => $image) {
                            $name = $DB_PRODUTOS['name_product'][$index];
                            $price = $DB_PRODUTOS['price_product'][$index];
                            $quantity = $DB_PRODUTOS['quantity_product'][$index];
                            $code = $DB_PRODUTOS['code'][$index];
                            ?>
                            <tr>
                                <td><img src="<?php echo $image; ?>" alt="<?php echo $name; ?>"></td>
                                <td><?php echo $name; ?></td>
                                <td><?php echo $quantity; ?></td>
                                <td>R$ <?php echo number_format($price, 2, ',', '.'); ?></td>
                                <td><?php echo $code; ?></td>
                                <td> 
                                    <img src="../images/remove.png" alt="" onclick="deletar()">  <!-- Desenvolver funçao de deletar puxando pelo código"-->
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php include "footer.php"; ?>
</body>
</html>
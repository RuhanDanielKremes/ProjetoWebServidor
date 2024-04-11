<!DOCTYPE html>
<html lang="en">

<?php include 'templates/header.php'?>

<div class='container mediun'>
    <h1>PÁGINA DE PRODUTOS</h1>
    <!--GRID DE PRODUTOS-->
    <div class="grid-product">
        <?php 
            require 'templates/DB.php';
            //A cada iteração vai renderizar um card de produtos vindo do banco de dados
            foreach($DB_PRODUTOS['image_product'] as $index => $image){
                $name = $DB_PRODUTOS['name_product'][$index];
                $price = $DB_PRODUTOS['price_product'][$index];
                $quantity = $DB_PRODUTOS['quantity_product'][$index];
        ?>
            <form method="POST" action="shopcart.php">
                    <input type="hidden" name="produto_id" value="<?php echo $productId; ?>">
                    <label for="quantity_<?php echo $productId; ?>">Quantidade:</label>
                    <input type="number" id="quantity_<?php echo $productId; ?>" name="quantidade" value="1" min="1" max="<?php echo $quantity; ?>">
                    <button type="submit" class="btn-buy" name="add_to_cart">Adicionar ao Carrinho</button>
                </form>
            <?php } ?>
    </div>
</div>
<?php include 'templates/footer.php'?>

</html>
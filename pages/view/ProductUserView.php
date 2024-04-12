<!DOCTYPE html>
<html lang="en">

<?php include '../public/header.php'?>

<div class='container mediun'>
    <h3>PÁGINA DE PRODUTOS</h3>
    <!--GRID DE PRODUTOS-->
    <div class="grid-product">
        <?php 
            require '../DB.php';
            //A cada iteração vai renderizar um card de produtos vindo do banco de dados
            foreach($DB_PRODUTOS['image_product'] as $index => $image){
                $name = $DB_PRODUTOS['name_product'][$index];
                $price = $DB_PRODUTOS['price_product'][$index];
                $quantity = $DB_PRODUTOS['quantity_product'][$index];
        ?>
            <div class="card-product">
            <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>">
                <h2><?php echo $name; ?></h2>
                <p>R$ <?php echo number_format($price, 2, ',', '.'); ?></p>
                <p>Quantidade: <?php echo $quantity; ?></p>
                <form method="POST" action="shopcart.php">
                    <button type="submit" class="btn-buy" name="add_to_cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <?php } ?>
    </div>
</div>
<?php include 'templates/footer.php'?>

</html>
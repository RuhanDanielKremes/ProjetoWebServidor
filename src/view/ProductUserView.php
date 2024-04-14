<!DOCTYPE html>
<html lang="en">

<?php include '../../public/header.php'?>

<div class='container mediun'>
    <h1>PÁGINA DE PRODUTOS</h1>
    <!--GRID DE PRODUTOS-->
    <div class="grid-product">
        <?php 
            require '../../config/DB.php';
            require '../controller/BTNAddToCartController.php';
            //A cada iteração vai renderizar um card de produtos vindo do banco de dados
            foreach($DB_PRODUTOS['image_product'] as $index => $image){
                $name = $DB_PRODUTOS['name_product'][$index];
                $price = $DB_PRODUTOS['price_product'][$index];
                $quantity = $DB_PRODUTOS['quantity_product'][$index];
        ?>
            <div class="card-product">
            <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>" width="300px" height="300px" >
                <h2><?php echo $name; ?></h2>
                <p>R$ <?php echo number_format($price, 2, ',', '.'); ?></p>
                <p>Quantidade: <?php echo $quantity; ?></p>
                <form action="../controller/BTNAddToCartController.php" method="post">
                    <button type="submit" class="btn-buy" name="add_to_cart" >Adicionar ao Carrinho</button>
                    <!--Enviando o codigo do produto em questão-->
                    <input type="hidden" name="product_code" value="<?php echo $code; ?>">
                </form>
            </div>
            <?php } ?>
    </div>
</div>
<?php include '../../public/footer.php'?>

</html>
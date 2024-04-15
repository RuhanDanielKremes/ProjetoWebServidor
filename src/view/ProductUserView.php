<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../../public/css/styleProducts.css">
<?php include '../../public/header.php'?>

<div class='container mediun'>
    <!--GRID DE PRODUTOS-->
    <div class="grid-product">
        <?php 
            require '../../config/DB_PRODUTOS.php';
            require '../controller/BTNAddToCartController.php';
            //A cada iteração vai renderizar um card de produtos vindo do banco de dados
            foreach($DB_PRODUTOS['image_product'] as $index => $image){
                $name = $DB_PRODUTOS['name_product'][$index];
                $price = $DB_PRODUTOS['price_product'][$index];
                
        ?>
        <div class="card-product">
            <img class="img-product" src="<?php echo $image; ?>" alt="<?php echo $name; ?>" width="300px" height="300px" >
                <h3 class="tittle"><?php echo $name; ?></h3>
                <p>R$ <?php echo number_format($price, 2, ',', '.'); ?></p>
                
                <form action="../controller/BTNAddToCartController.php" method="post">
                    <button type="submit" class="btn-buy" name="add_to_cart" >Adicionar ao Carrinho</button>
                    <!--Enviando o codigo do produto em questão-->
                    <input type="hidden" name="product_code" value="<?php echo $code; ?>">
                </form>
        </div>
            <?php } ?>
    </div>
</div>


</html>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<?php include 'templates/header.php'?>

<div class='container mediun'>
    <h1>PÁGINA DE PRODUTOS</h1>
    <!--GRID DE PRODUTOS-->
    <div class="grid-product">
        <?php 
            require '/templates/DB.php';
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
                <button class="btn-buy">Comprar</button> <!--ADICIONAR FUNÇÃO PARA PUXAR POR CARRINHO KAUE-->
            </div>
            <?php } ?>
    </div>
</div>
<?php include 'templates/footer.php'?>
</body>
</html>
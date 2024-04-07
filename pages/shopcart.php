<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>

    <?php include 'templates/header.php' ?>
    <?php include 'CartController.php' ?>

    <?php $cartController = new CartController();
    $cartController->showCart();
    ?>
    <div><img src="Patins.png" alt=""></div>


    <?php include 'templates/footer.php' ?>

</body>

</html>
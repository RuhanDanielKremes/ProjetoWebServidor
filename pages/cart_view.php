<!-- Código HTML para exibir o carrinho de compras -->
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
    <?php include 'CartController.php';
    $cartController = new CartController();
    
    ?>



    <div class="container">
        <h1>Carrinho de Compras</h1>
        <?php
        // Obter os itens no carrinho
        $cartItems = $cartController->getCartItems();

        // Verificar se o carrinho está vazio
        if (empty($cartItems)) {
            echo "<p>O carrinho está vazio.</p>";
        } else {
            // Exibir cada item no carrinho
            foreach ($cartItems as $item) {
                echo "<div class='row'>";
                echo "<div class='col s12'>";
                echo "<div class='card'>";
                echo "<div class='card-content'>";
                echo "<span class='card-title'>" . $item['produto_nome'] . "</span>";
                echo "<p>Quantidade: " . $item['quantidade'] . "</p>";
                echo "<p>Preço: R$ " . number_format($item['preco'], 2, ',', '.') . "</p>"; // Formatação do preço
                echo "</div>";
                echo "<div class='card-action'>";
                echo "<form method='POST'>";
                echo "<input type='hidden' name='produto_id' value='" . $item['produto_id'] . "'>";
                echo "<button class='btn' type='submit' name='remove_from_cart'>Remover</button>"; // Botão para remover o item do carrinho
                echo "</form>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }

            // Calcular e exibir o total do carrinho
            $total = $cartController->getTotal();
            echo "<p>Total: R$ " . number_format($total, 2, ',', '.') . "</p>"; // Formatação do total
        }

        ?>
    </div>
        
    <?php include 'templates/footer.php'?>

</body>
</html>
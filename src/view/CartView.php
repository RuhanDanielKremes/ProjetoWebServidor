<!DOCTYPE html>
<html lang="en">

<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<?php 
    include '../../public/header.php';
    include '../controller/CartController.php';
    $cartController = new CartController();
?>

<div class="container">
    <h1>Carrinho de Compras</h1>
    <?php
    // Verificar se o formulário de adicionar/remover itens foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verificar se um item foi adicionado ao carrinho
        if (isset($_POST['add_to_cart'])) {
            // Adicionar item ao carrinho
            $code = $_POST['product_code'];
            $name_product = $_POST['name_product'];
            $quantity_product = $_POST['quantity_product'];
            $price_product = $_POST['price_product'];
            $cartController->addCart($code, $name_product, $quantity_product, $price_product);
        }
    }

    // Obter os itens no carrinho
    $cartItems = $cartController->getCartItems();

    // Verificar se o carrinho está vazio
    if (empty($cartItems)) {
        echo "<h2>O carrinho está vazio.</h2>";
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
            echo "<input type='hidden' name='code' value='" . $item['produto_id'] . "'>";
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

        // Adicionar o botão para continuar comprando
        echo "<a class='btn' href='ProductUserView.php'>Continuar Comprando</a>";
    }
    ?>
</div>

<?php include '../../public/footer.php' ?>

</html>

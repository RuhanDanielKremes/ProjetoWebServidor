<!DOCTYPE html>
<html lang="en">


<?php 
    include '../../public/header.php';
    include '../controller/CartController.php';
    $cartController = new CartController();
?>

<div class="container">
    <h1>Carrinho de Compras</h1>
    <?php
    // Obter os itens no carrinho
    $cartItems = $cartController->getCartItems();

    // Verificar se o carrinho está vazio
    if (empty($cartItems)) {
        echo "<h2>O carrinho está vazio.</h2>";
    } else {
        // Exibir cada item no carrinho
        foreach ($cartItems as $item) {
            // Procurar o produto correspondente no banco de dados dos produtos
            $index = array_search($item['code'], $DB_PRODUTOS['code']);
            if ($index !== false) {
                echo "<div class='row'>";
                echo "<div class='col s12'>";
                echo "<div class='card'>";
                echo "<div class='card-image'>";
                echo "<img src='" . $DB_PRODUTOS['image_product'][$index] . "' alt='Product Image'>";
                echo "<span class='card-title'>" . $DB_PRODUTOS['name_product'][$index] . "</span>";
                echo "</div>";
                echo "<div class='card-content'>";
                echo "<p>Quantidade: " . $item['quantidade'] . "</p>";
                echo "<p>Preço: R$ " . number_format($item['preco'], 2, ',', '.') . "</p>"; // Formatação do preço
                echo "<p>Descrição: " . $DB_PRODUTOS['description'][$index] . "</p>"; // Adicione a descrição do produto
                echo "</div>";
                echo "<div class='card-action'>";
                echo "<form method='POST'>";
                echo "<input type='hidden' name='code' value='" . $item['code'] . "'>";
                echo "<button class='btn' type='submit' name='remove_from_cart'>Remover</button>"; // Botão para remover o item do carrinho
                echo "</form>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            } else {
                echo "<p>O produto correspondente não foi encontrado no banco de dados.</p>";
            }
        }

        // Calcular e exibir o total do carrinho
        $total = $cartController->getTotal();
        echo "<p>Total: R$ " . number_format($total, 2, ',', '.') . "</p>"; // Formatação do total

        // Adicionar o botão para continuar comprando
        echo "<a class='btn' href='Produtos.php'>Continuar Comprando</a>";
    }
    ?>
</div>

<?php include '../../public/footer.php' ?>


</html>
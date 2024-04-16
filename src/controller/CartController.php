<?php
include '../model/CartModel.php';
include '../../config/DB_PRODUTOS.php';
include '../../config/DB.php';


$addItem = function(){
    if(isset($_POST['product_code'])){
        $code = $_POST['product_code'];
        
        $json_data = file_get_contents('../../config/BDsaveCart.json');
        $cart_carregado = json_decode($json_data, true);
        
        if(empty($cart_carregado)){
            $cart_carregado = array(
                'product_code' => array(),
                'product_name' => array(),
                'product_price' => array(),
                'product_quantity' => array(),
                'user' => array()
            );
        }
        $cart_carregado['product_code'][] = $code;
        $cart_carregado['product_name'][] = $DB_PRODUTOS['name_product'][$code];
        $cart_carregado['product_price'][] = $DB_PRODUTOS['price_product'][$code];
        $cart_carregado['product_quantity'][] = 1; 
        $cart_carregado['user'][] = $_SESSION['name'];
        
        $json_data = json_encode($cart_carregado);
        file_put_contents('../../config/BDsaveCart.json', $json_data);
    } 
}
?>

<?php
$addItem();

// Verificar se um item foi adicionado ao carrinho
if (isset($_POST['add_to_cart'])) {
    $code = $_POST['product_code'];
    $name_product = $_POST['name_product']; // Se necessário
    $quantity_product = $_POST['quantity_product']; // Se necessário
    $price_product = $_POST['price_product']; // Se necessário

    // Adicionar o item ao carrinho (ou realizar outras operações conforme necessário)
    $cartController = new CartController();
    $cartController->addCart($code, $name_product, $quantity_product, $price_product);

    // Redirecionar para o CartView.php após o processamento
    header("Location: ../view/CartView.php");
    exit();
}

class CartController {
    private $cartModel;
    
    function __construct() {
        $this->cartModel = new CartModel(); // Inicializa o modelo do carrinho de compras
    }

    function addCart($produto_id, $produto_nome, $quantidade, $preco) {
        // Adiciona um item ao carrinho
        $this->cartModel->addItem($produto_id, $produto_nome, $quantidade, $preco);
    }

    function removerCart($produto_id) {
        // Remove um item do carrinho
        $this->cartModel->removerItem($produto_id);
    }

    function mostrarCart() {
        // Exibe o carrinho de compras
        $cartItems = $this->cartModel->getCartItems();
        $total = $this->cartModel->calculaTotal();
        include '../view/CartView.php'; // visualização do carrinho de compras
    }

    function limparCart() {
        // Limpa o carrinho de compras
        $this->cartModel->limparCart();
    }

    function getCartItems() {
        // Retorna os itens do carrinho usando o método correspondente do modelo
        return $this->cartModel->getCartItems();
    }

    function getTotal() {
        // Retorna o total do carrinho usando o método correspondente do modelo
        return $this->cartModel->calculaTotal();
    }

}
?>


<?php

// Métodos para manipular o carrinho de compras

require_once('../../config/Connect.php'); 
require_once('Consultas.php');

class CartModel
{

    private $cartItems = array(); // Array para armazenar os itens no carrinho
    private $connection; // Atributo para armazenar a conexão com o banco de dados


    // Construtor que inicializa a conexão com o banco de dados
    public function __construct()
    {
        $connect = new Connect(); // Criar uma instância da classe Connect
        $this->connection = $connect->getConnection(); // Obter a conexão PDO do objeto Connect
    }

    public function addItem($produto_id, $quantidade)
    {

        // Consultar o banco de dados para obter as informações do produto pelo ID
        $consultas = new Consultas(); // Criar uma instância da classe Consultas
        $product = $consultas->queryForCode($this->connection, $produto_id);
        
        // Verificar se o produto foi encontrado
        if ($product) {
            // Adicionar o produto ao carrinho
            $this->cartItems[$produto_id] = array(
                'produto_id' => $produto_id,
                'produto_nome' => $product['produto_nome'], // Usar o nome do produto obtido na consulta
                'quantidade' => $quantidade,
                'preco' => $product['preco'] // Usar o preço do produto obtido na consulta
        );

        // Depuração - exibir os itens após a adição
        echo "Item adicionado ao carrinho: ";
        var_dump($this->cartItems);
    } else {
        echo "Produto não encontrado.";
    }
}

    public function removerItem($produto_id)
    {
        // Remover um item do carrinho
        if (isset($this->cartItems[$produto_id])) {
            unset($this->cartItems[$produto_id]);
        }
    }

    public function getCartItems()
    {
        // Obter os itens no carrinho
        return $this->cartItems;
    }

    public function calculaTotal()
    {
        // Calcular o total do carrinho
        $total = 0;
        foreach ($this->cartItems as $item) {
            $total += $item['quantidade'] * $item['preco'];
        }
        return $total;
    }

    public function limparCart()
    {
        // Limpar o carrinho
        $this->cartItems = array();
    }
}

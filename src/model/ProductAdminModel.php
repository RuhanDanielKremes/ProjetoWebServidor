<?php
    class product_model{        
        public function add_product($imagem, $nome, $quantidade, $preco, $codigo){
            require '../../config/DB_PRODUTOS.php';
            if(isset($_POST["add_product"]) && $_POST["add_product"] == "Adicionar"){
                array_push($DB_PRODUTOS['image_product'], $imagem);
                array_push($DB_PRODUTOS['name_product'], $nome);
                array_push($DB_PRODUTOS['price_product'], $preco);
                array_push($DB_PRODUTOS['quantity_product'], $quantidade);
                array_push($DB_PRODUTOS['code'], $codigo);
                        // Escrever os dados de volta no arquivo config/DB.php
                file_put_contents('../../config/DB_PRODUTOS.php', '<?php $DB_PRODUTOS = ' . var_export($DB_PRODUTOS, true) . ';');
            }      
        
        }
    }
?>;
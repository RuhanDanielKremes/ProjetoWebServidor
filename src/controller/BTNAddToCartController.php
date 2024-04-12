<?php 
    class AddToCartModel{
        public function adicionarNoCarrinho($code){  
            require "../../config/DB.php";
            //Função array search retorna o index do produto
            $index = array_search($code, $DB_PRODUTOS['$code']);
            if ($index == true) {
                //O codigo só puxei por controle msm, talvez nem seja necessário
                $code = $DB_PRODUTOS['code'][$index];
                
                //Variáveis que vai mostrar na view do carrinho
                $image = $DB_PRODUTOS['image_product'][$index];
                $price = $DB_PRODUTOS['price_product'][$index];
                $name = $DB_PRODUTOS['$name_product'][$index];

                /*Variável que precisará de lógica, pega o index a
                través do código e depois diminue 1 da quantidade quando o user realizar a compra*/
                $quantity = $DB_PRODUTOS['quantity_product'][$index];

                /*minha ideia é criar uma função linha que quando {se vc quiser continuar o cod aqui nessa classe msm 
                  da pra ser um vetor ou criar a matriz direto}
                 você chamar ela no carrinho e fazer o controle da linha recebida. 
                 Você vai precisar criar uma matriz carrinho para armazenar todas essas linhas que vão ser passadas por aqui,
                 essa matriz vai ser os produtos que o user ta comprando que da pra você exibir pra ele em forma de tabela.
                 depois é só fazer a associação do carrinho dele com os dados do user (você e ruhan)
                 E por fim, depois que ele realizar a compra fazer a subtração da quantidade do BD
                 
                */
                


            }  
        }               

    } 
?>
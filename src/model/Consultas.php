<?php 
    require_once('Connect.php');
class Consultas{
    //quando eu for chamar a query vou ter que instanciar uma conexão e a var connection com o método getConnection()
    public function queryForCode($connection, $code){
        //criar var code no bd, esqueci. se não vai ficar ruim consutar pelo id
        $query = "SELECT * FROM product WHERE product_code = :code";
        //abrindo a conexão e enviando para o banco de dados a consulta
        $stmt = $connection->prepare($query);
        //bindParam vincula um parametro a consulta
        $stmt->bindParam(':code', $code, PDO::PARAM_STR);
        //executa a consulta
        $stmt->execute();
        
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

     public function getAllProducts($conexao) {
        try {
            $query = "SELECT * FROM product";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro ao consultar todos os produtos: " . $e->getMessage();
            return false;
        }
    }

}

?>;

<?php 
    require_once('../../config/Connect.php');
class ProductModel extends Connect{
    private $table;

    function __construct(){
        //invocando construtor da classe pai para estabelecer uma conexão bd
        parent::__construct();
        $this->table = 'product';
    }

    public function queryForCode($name){
        try{
            $sqlSelect = $this->connection->query("SELECT product_id FROM $this->table WHERE product_name = $name");
            $resultQuery = $sqlSelect->fetchAll();
            return $resultQuery; 
        
        }catch(PDOException $e){
            echo "Banco de dados indisponível" . $e->getMessage();
            return false;
        }

    }

     public function getAll() { 
        //
         try {
        
            $sqlSelect = $this->connection->query("SELECT product_name, product_quantity, product_price FROM $this->table");
            $resultQuery = $sqlSelect->fetchAll();
            return $resultQuery;   
        } catch (PDOException $e) {
            echo "Banco de dados indisponível " . $e->getMessage();
            return false;
        }
    }

    public function insertInto( $name, $price, $quantity, $code){
        try{
            $sqlInsert = "INSERT INTO " . $this->table . " (product_name, product_quantity, product_price) VALUES (:name, :quantity, :price)";
            $stmt = $this->connection->prepare($sqlInsert);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':quantity', $quantity);
            $stmt->bindParam(':price', $price);
            $stmt->execute();
            return true;
            
        }catch(PDOException $e){
            echo 'Banco de dados indisponível' . $e->getMessage();
            return false;
        }
    }
    public function deleteProduct($name){
    
        try {

            $sqlDelete = "DELETE FROM " . $this->table . " WHERE product_name = :name";
            $stmt = $this->connection->prepare($sqlDelete);
            $stmt->bindParam(':name', $name);
            $stmt->execute();
            return true;

        } catch (PDOException $e) {
            echo "Erro ao excluir produto: " . $e->getMessage();
            return false;
        }
   }

}

?>;

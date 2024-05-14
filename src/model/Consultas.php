<?php 
    require_once('../../config/Connect.php');
class ProductModel extends Connect{
    private $table;

    function __construct(){
        //invocando construtor da classe pai para estabelecer uma conexão bd
        parent::__construct();
        $this->table = 'product';
    }

    public function queryForCode(){
        try{
    
        
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

}

?>;

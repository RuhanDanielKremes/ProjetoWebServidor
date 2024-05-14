<?php 
    require_once('Connect.php');
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
        
            $sqlSelect = $this->connection->query("SELECT * FROM $this->table");
            $resultQuery = $sqlSelect->fetchAll();
            return $resultQuery;
            
        } catch (PDOException $e) {
            echo "Banco de dados indisponível " . $e->getMessage();
            return false;
        }
    }

}

?>;

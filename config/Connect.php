<?php
    define("HOST","localhost");
    define("DATABASE","abakoos");
    define("USER","postgres");
    define("PASSWORD","admin");

    class Connect{
        protected $connection;

        function __construct(){
            $this->connectDatabase();
        }
        function connectDatabase(){
            try{
                $this->connection = new PDO("pgsql:host=" . HOST . "; dbname=" .DATABASE, USER, PASSWORD);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                //teste
                echo "conexão estabelecida";
            }catch(PDOException $e){
                echo "Falha ao conectar". $e->getMessage() ."";
            }
        }
        
        function getConnection(){
            return $this->connection;
        }
    }
?>; 
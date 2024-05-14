<?php
    require_once('../model/Consultas.php');

    class ProductController{

        private $model;

        function __construct(){
            $this->model = new ProductModel();
        }

        function getAll(){
            $result = $this->model->getAll();
            require_once('../view/ProductAdminView.php');
            return $result;
        }

        function insertINTO( $name, $price, $quantity, $code){
            return $this->model->insertInto( $name, $price, $quantity, $code);
        }

        function queryForCode($name){
            return $this->model->queryForCode($name);
        }

        function deleteProduct($name){
            return $this->model->deleteProduct($name);
        }
    }
?>
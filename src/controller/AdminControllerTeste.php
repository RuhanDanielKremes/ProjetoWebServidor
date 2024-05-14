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

    }
?>
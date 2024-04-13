<?php
    require 'breadcrumbs.php';
    $dir= $breadcrumbs . "config/DB.php";
    require "$dir";
    $dir = $breadcrumbs . "public/AccessDenied.php";
    $iterator = 1;
    if($_SESSION['role'] != 'admin'){
        foreach($DB_paginas_atorizada_para_usuarios as $pagina){
            if($pagina != $_SERVER['REQUEST_URI'] && $iterator == 2){
                echo "<div>";
                print_r(($_SERVER['REQUEST_URI']));
                echo "<div>";
                echo '<br';
                print_r($pagina);
                echo '<br';
                header("Location:$dir");
                
            }
            $iterator++;
        }
//            echo "<h1>Usuário não autorizado! $iterator</h1>"; ehco usado para testes
    }
    ?>
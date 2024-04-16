<?php
    require 'breadcrumbs.php';
    $dir= $breadcrumbs . "config/DB.php";
    require "$dir";
    $dirAcessDenied = $breadcrumbs . "public/AccessDenied.php";
    $iterator = 0;
    if($_SESSION['role'] != 'admin'){
        foreach($DB_paginas_atorizada_para_usuarios as $pagina){
            if($pagina == $_SERVER['REQUEST_URI']) {
                break;
            }elseif($pagina != $_SERVER['REQUEST_URI'] && $iterator == 2){               
                header("Location: $dirAcessDenied");
            }
            $iterator++;
        }
//            echo "<h1>Usuário não autorizado! $iterator</h1>"; ehco usado para testes
    }
    ?>
<?php
$atualpage = $_SERVER['REQUEST_URI'];

// Remover o diretório raiz do caminho atual
$relativePath = substr($atualpage, 24);

// Dividir o caminho em partes (diretórios)
$directories = explode("/", $relativePath);

// Criar o caminho relativo até o diretório raiz (voltar para o diretório raiz)
$breadcrumbs = str_repeat("../", count($directories) - 1);

// Adicionar o nome do arquivo índice (index.php) ao caminho relativo
// $breadcrumbs .= "index.php";

//echo $breadcrumbs;  
/*    $atualpage = $_SERVER['REQUEST_URI'];
    $URI = substr($atualpage, 24);
    $relativePath = explode('/', $URI);
    $dirCount = count($relativePath) - 1;
    $test;

    $returnpath = function(){
        $test = str_repeat("../", $dirCount);
        print_r ($relativePath);
    }

/*
    echo $breadcrumbs;

    echo "relativeURI $relativeURI<br>";
    echo "$atualpage<br>";
    echo "$URI<br>";
*/
?>    
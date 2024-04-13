<?php
$atualpage = $_SERVER['REQUEST_URI'];

// Remover o diretório raiz do caminho atual
$relativePath = substr($atualpage, 24);

// Dividir o caminho em partes (diretórios)
$directories = explode("/", $relativePath);

// Criar o caminho relativo até o diretório raiz (voltar para o diretório raiz)
$breadcrumbs = str_repeat("../", count($directories) - 1);

?>    
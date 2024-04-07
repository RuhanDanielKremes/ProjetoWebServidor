<?php 

    require 'DB.php';

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $iterator = 0;

    foreach ($DB['name'] as $name){
        if ($nome == $name){
            if ($senha == $DB['password'][$iterator]){
                echo 'Bem vindo, ' . $nome . '!';
                break;
            } else {
                echo 'Usuário ou senha inválidos!';
                break;
            }
        }
        $iterator++;
    }
?>
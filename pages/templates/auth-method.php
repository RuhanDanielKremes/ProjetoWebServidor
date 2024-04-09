<?php 

    require 'DB.php';

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $iterator = 0;

    foreach ($DB['name'] as $name){
        if ($nome == $name){
            if ($senha == $DB['password']["$iterator"]){
                echo 'Bem vindo, ' . $nome . '!';
                session_start();
                $_SESSION['LogginTime'] = time()+3600;
                header("Location: ../index.php");
                break;                
            } else {
                echo '<h1>Usuário ou senha inválidos!</h1>';
                break;
            }
        }
        $iterator++;
    }
?>
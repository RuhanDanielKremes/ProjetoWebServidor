<?php 

    require '../../config/DB.php';

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $iterator = 0;

    foreach ($DB['name'] as $name){
        if ($nome === $name){
            if ($senha === $DB['password']["$iterator"]){
                echo 'Bem vindo, ' . $nome . '!';
                session_start();
                $_SESSION['LogginTime'] = time()+3600;
                $_SESSION['name'] = $nome;
                $_SESSION['role'] = $DB['role']["$iterator"];
                $_SESSION['view'] = $DB['role']["$iterator"];
                header("Location: ../index.php");
                break;                
            } else {
                echo '<h1>Usuário ou senha inválidos!</h1>';
                break;
            }
        }
        $iterator++;
    }
    echo '<h1>Usuário ou senha inválidos!</h1><br><a href="../index.php">Voltar</a>';
?>
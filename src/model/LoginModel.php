<?php 

    require '../../config/DB.php';

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $iterator = 0;

    $json_data = file_get_contents('../../config/BDsave.json');
    $vetor_carregado = json_decode($json_data, true);


    foreach ($vetor_carregado['name'] as $name){
        if ($nome === $name){
            if ($senha === $vetor_carregado['password']["$iterator"]){
                echo 'Bem vindo, ' . $nome . '!';
                session_start();
                $_SESSION['LogginTime'] = time()+3600;
                $_SESSION['name'] = $nome;
                $_SESSION['role'] = $vetor_carregado['role']["$iterator"];
                $_SESSION['view'] = $vetor_carregado['view']["$iterator"];
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
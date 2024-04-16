<?php

    //require "../../config/DB.php";

    // Carregar a array de volta do arquivo JSON
    $json_data = file_get_contents('../../config/BDsave.json');
    $vetor_carregado = json_decode($json_data, true);

    $cadastrar = true;

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];
    $telefone = $_POST['telefone'];
    $role = 'user';
    $created_at = date('Y-m-d H:i:s');

    if($senha != $confirmar_senha){
        $cadastrar = false;
        echo "<div>As senhas não coincidem!</div>";
        return;
    }

    foreach($vetor_carregado['email'] as $email_cadastrado){
        if($email == $email_cadastrado){
            $cadastrar = false;
            echo "<div>Email já cadastrado!</div>";
            return;
        }
    }

    foreach($vetor_carregado['name'] as $nome_cadastrado){
        if($nome == $nome_cadastrado){
            $cadastrar = false;
            echo "<div>Nome já cadastrado!</div>";
            return;
        }
    }

    foreach($vetor_carregado['phone'] as $telefone_cadastrado){
        if($telefone == $telefone_cadastrado){
            $cadastrar = false;
            echo "<div>Telefone já cadastrado!</div>";
            return;
        }
    }
    
    if($cadastrar){
        
        $vetor_carregado['email'][] = $email;
        $vetor_carregado['phone'][] = $telefone;
        $DB['name'][] = $nome;
        $DB['email'][] = $email;
        $DB['password'][] = $senha;
        $DB['phone'][] = $telefone;
        $DB['role'][] = "user";
        $DB['created_at'][] = time();
        $json_data = json_encode($DB);
        file_put_contents('../../config/BDsave.json', $json_data);
            echo "<div>Cadastro realizado com sucesso!</div>";
        }
        else{
            echo "<div>Erro ao cadastrar!</div>";
        }
?>
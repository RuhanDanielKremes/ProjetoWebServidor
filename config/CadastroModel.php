<?php

    require "../../config/DB.php";

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

    foreach($DB['email'] as $email_cadastrado){
        if($email == $email_cadastrado){
            $cadastrar = false;
            echo "<div>Email já cadastrado!</div>";
            return;
        }
    }
    foreach($DB['name'] as $nome_cadastrado){
        if($nome == $nome_cadastrado){
            $cadastrar = false;
            echo "<div>Nome já cadastrado!</div>";
            return;
        }
    }
    foreach($DB['phone'] as $telefone_cadastrado){
        if($telefone == $telefone_cadastrado){
            $cadastrar = false;
            echo "<div>Telefone já cadastrado!</div>";
            return;
        }
    }
    if($cadastrar){
    array_push($DB['name'], $nome);
    array_push($DB['email'], $email);
    array_push($DB['password'], $senha);
    array_push($DB['phone'], $telefone);
    array_push($DB['role'], "user");
    array_push($DB['created_at'], date('Y-m-d H:i:s'));




    $DB['name'][] = $nome;
    $DB['email'][] = $email;
    $DB['password'][] = $senha;
    $DB['phone'][] = $telefone;
    $DB['role'][] = "user";
    $DB['created_at'][] = time();
        echo "<div>Cadastro realizado com sucesso!</div>";
    }
    else{
        echo "<div>Erro ao cadastrar!</div>";
    }
?>
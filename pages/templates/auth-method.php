<?php 

    require 'DB.php';

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    if (in_array($nome, $DB['name']) && in_array($senha, $DB['password'])) {
        echo 'Bem vindo, ' . $nome . '!';
    } else {
        echo 'Usuário ou senha inválidos!';
    }

/*    
    if ($nome == 'admin' && $senha == 'AdminPassword') {
        echo 'Bem vindo, admin!';
    } else {
        echo 'Usuário ou senha inválidos!';
    }
*/

?>
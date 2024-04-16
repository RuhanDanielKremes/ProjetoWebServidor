<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
        .brand {
            background: #cbb09c !important;
        }
        .brand-text {
            color: #cbb09c !important;
        }
        form {
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            z-index: 1000;
        }
    </style>
</head>
<body class="grey lighten-4">
    <nav class="white z-depth-0">
        <div class="container">
            <a href="#" class="brand-logo brand-text">UwU</a>
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <li>
                    <a href="#" class="btn brand z-depth-10">placeholder</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h4 class="center">Cadastre-se</h4>
        <form method="POST" action="../model/CadastroModel.php">
            <label>Nome: </label><input type="text" name="nome" id="loginUsername" placeholder="Name"><br>
            <label>E-mail</label><input type="email" name="email" id="loginEmail" placeholder="Email"><br>
            <label>Telefone</label><input type="tel" name="telefone" id="loginPhone" placeholder="Phone"><br>
            <label>Senha: </label><input type="password" name="senha" id="loginPassword" placeholder="Password"><br>
            <label>Confirme a senha: </label><input type="password" name="confirmar_senha" id="loginPasswordVerify" placeholder="Password"><br>
            <button class="btn form-send" id="SendLoginInfoBtn">Enviar</button>
            <p>Já tem conta? <a href="LoginView.php">Faça o Login!</a></p>
        </form>
    
   <!--<img src="../../public/images/squid.png" alt="" class="fixedImage hide-on-small-and-down">-->

    <script src="../ButtonAction.js"></script>
    
    <?php include "../../public/footer.php"?>    
</html>
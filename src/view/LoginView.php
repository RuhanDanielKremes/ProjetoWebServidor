<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
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
    </style>
</head>
<body class="grey lighten-4">
    <nav class="white z-depth-0">
        <div class="container">
            <a href="#" class="brand-logo brand-text">UwU</a>
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <li>
                    <a href="#" class="btn brand z-depth-10">Add a pizza</a>
                </li>
            </ul>
        </div>
    </nav>
   <form method="POST" action="../model/LoginModel.php">
        <label>Nome: </label><input type="text" name="nome" id="loginUsername" placeholder="Name"><br>
        <label>Senha: </label><input type="password" name="senha" id="loginPassword" placeholder="Password"><br>
        <button class="btn form-send" id="SendLoginInfoBtn">Enviar</button>
    </form>  
    
   <?php include "../../public/footer.php"?>
   
   <script src="../ButtonAction.js"></script>
        
</body>
</html>
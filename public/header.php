<?php
    session_start();
    if(empty($_SESSION['LogginTime']) || $_SESSION['LogginTime'] < time()){
        header("Location: ../src/view/LoginView.php");
    }
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UwU</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        .paddingLR-10px{
            padding: 0px;
            padding-left: 10px;
            padding-right: 10px;
        }
    </style>
</head>
<body class="grey lighten-4">
    <nav class="white z-depth-0 deep-orange lighten-4">
        <div class="nav-wrapper">
            <ul class="left">
                <?php
                    $atualpage = $_SERVER['REQUEST_URI'];
                    /*if($_SESSION['role'] == 'admin'){       //Caso seja um admin
                        switch($atualpage){
                            case '/PWS/ProjetoWebServidor/src/index.php':
                                //dropdown
                                echo '
                                <li class="active"><a href=#>Home</a></li>
                                <a class="dropdown-trigger btn" href="#" data-target="dropdown1">Produtos</a>
                                    <ul id="dropdown1" class="dropdown-content">
                                        <li><a href="view/ProductUserView.php">Usuario</a></li>
                                        <li><a href="view/ProductAdminView.php">Administrador</a></li>
                                </ul>
                                <li><a href="view/CartView.php">Carrinho</a></li>';
                                break;
                            case '/PWS/ProjetoWebServidor/src/view/ProductUserView.php':
                                echo '<li><a href="../index.php">Home</a></li>
                                <li class="active"><a href=#>Produtos</a></li>
                                <li><a href="CartView.php">Carrinho</a></li>';
                                break;
                            case '/PWS/ProjetoWebServidor/src/view/CartView.php':
                                echo '<li><a href="../index.php">Home</a></li>
                                <li><a href="ProductUserView.php">Produtos</a></li>
                                <li class="active"><a href="#">Carrinho</a></li>';
                                break;/*
                            default :   DEFAULT QUEBROU COM A ESTRUTURAÇÃO DE PASTAS
                            echo '<li><a href="../index.php">Home</a></li>
                            <li><a href="../src/view/ProductUserView.php">Produtos</a></li>
                            <li><a href="../src/view/CartView.php">Carrinho</a></li>';*/
                       /* }
                    }else{
                        if($_SESSION['role'] == 'user'){    //Caso seja um usúario
                         */   switch($atualpage){
                                case '/PWS/ProjetoWebServidor/src/index.php':
                                    echo '<li class="active"><a href=#>Home</a></li>
                                    <li><a href="view/ProductUserView.php">Produtos</a></li>
                                    <li><a href="view/CartView.php">Carrinho</a></li>';
                                    break;
                                case '/PWS/ProjetoWebServidor/src/view/ProductUserView.php':
                                    echo '<li><a href="../index.php">Home</a></li>
                                    <li class="active"><a href=#>Produtos</a></li>
                                    <li><a href="CartView.php">Carrinho</a></li>';
                                    break;
                                case '/PWS/ProjetoWebServidor/src/view/CartView.php':
                                    echo '<li><a href="../index.php">Home</a></li>
                                    <li><a href="ProductUserView.php">Produtos</a></li>
                                    <li class="active"><a href="#">Carrinho</a></li>';
                                    break;
                                default :
                                    include "breadcrumbs.php";
                                    echo "<li><a href=\"$breadcrumbs"."src/index.php\">Home</a></li>
                                    <li><a href=\"$breadcrumbs"."src/view/ProductUserView.php\">Produtos</a></li>
                                    <li><a href=\"$breadcrumbs"."src/view/CartView.php\">Carrinho</a></li>";
                            }
                        ?>
            </ul>
            <ul id="nav-mobile" class="right hide-on-small-and-down ">
                <li class="paddingLR-10px">
                    <div class="black-text margin-10px">
                        <?php
                        $timeremain = $_SESSION['LogginTime'] - time();
                        if($timeremain >= 3600){
                            echo 'Tempo restante: ' . floor($timeremain/3600) . ' hora(s)';
                        }elseif($timeremain >=60){
                            echo 'Tempo restante: ' . floor($timeremain/60) . ' minuto(s)';
                        }else{
                            echo 'Tempo restante: ' . $timeremain . ' segundo(s)';
                        }
                        ?>
                    </div>
                </li>
                <li>
                    <a href="../src/Controller/LogOut.php" class='btn brand z-depth-10'>Log out</a>
                </li>
            </ul>
            <a href="#" class="brand-logo center brand-text hide-on-small-and-down">UwU</a>
        </div>
    </nav>
    <script src="dropdown.js"></script>
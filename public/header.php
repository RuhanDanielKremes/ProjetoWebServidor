<?php
    session_start();
    include "breadcrumbs.php";
    if(!isset($_SESSION['LogginTime']) || $_SESSION['LogginTime'] < time()){
        $dir = $breadcrumbs."src/view/LoginView.php";
        header("Location: $dir");
    }
    $dir = $breadcrumbs."public/pages_authorized.php";
    require "$dir";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UwU</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        .paddingLR-10px{
            padding: 0px;
            padding-left: 10px;
            padding-right: 10px;
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <nav class="white z-depth-0 deep-orange lighten-4">
        <div class="nav-wrapper">
            <ul class="left">
                <?php
                    $atualpage = $_SERVER['REQUEST_URI'];
                    if($_SESSION['role'] == 'admin' && $_SESSION['view'] == 'admin'){
                        switch($atualpage){
                            case '/PWS/ProjetoWebServidor/src/index.php':
                                echo '<li class="active"><a href=#>Home</a></li>
                                <li><a href="view/ProductAdminView.php">Produtos</a></li>
                                <li><a href="view/CartView.php">Carrinho</a></li>';
                                break;
                            case '/PWS/ProjetoWebServidor/src/view/ProductAdminView.php':
                                echo '<li><a href="../index.php">Home</a></li>
                                <li class="active"><a href=#>Produtos</a></li>
                                <li><a href="CartView.php">Carrinho</a></li>';
                                break;
                            case '/PWS/ProjetoWebServidor/src/view/CartView.php':
                                echo '<li><a href="../index.php">Home</a></li>
                                <li><a href="ProductAdminView.php">Produtos</a></li>
                                <li class="active"><a href="#">Carrinho</a></li>';
                                break;
                            default :
                                include "breadcrumbs.php";
                                echo "<li><a href=\"$breadcrumbs"."src/index.php\">Home</a></li>
                                <li><a href=\"$breadcrumbs"."src/view/ProductAdminView.php\">Produtos</a></li>
                                <li><a href=\"$breadcrumbs"."src/view/CartView.php\">Carrinho</a></li>";
                        }   
                    }else{
                        switch($atualpage){
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
                <?php
                    include "breadcrumbs.php";
                    $dir = $breadcrumbs."src/model/ToggleViewModel.php";
                    if ($_SESSION['role'] == 'admin') {
                        if ($_SESSION['view'] == 'admin') {
                            echo "<li><a href=\"$dir\" class=\"btn\"><i class=\"material-icons left\">assignment_ind</i>User View</a></li>";
                        } else {
                            echo "<li><a href=\"$dir\" class=\"btn\"><i class=\"material-icons left\">polymer</i>Admin View</a></li>";
                        }
                    }
                ?>
                <li>
                    <?php 
                        include "breadcrumbs.php";
                        echo "<a href=\""."$breadcrumbs"."src/controller/LogOut.php\"                      
                        class='btn brand z-depth-10'><i class=\"material-icons left\">exit_to_app</i>Log out</a>"
                    ?>
                </li>
            </ul>
            <a href="#" class="brand-logo center brand-text hide-on-small-and-down">UwU</a>
        </div>
    </nav>
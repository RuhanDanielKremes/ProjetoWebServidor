    <?php
    session_start();
    if(empty($_SESSION['LogginTime']) || $_SESSION['LogginTime'] < time()){
        header("Location: templates/Login.php");
    }
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
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
                    switch($atualpage){
                    case '/PWS/ProjetoWebServidor/pages/index.php':
                        echo '<li class="active"><a href="../pages/index.php">Home</a></li>
                            <li><a href="../pages/produtos-user-view.php">Produtos</a></li>
                            <li><a href="../pages/cart_view.php">Carrinho</a></li>';
                        break;
                    case '/PWS/ProjetoWebServidor/pages/produtos-user-view.php':
                        echo '<li><a href="../pages/index.php">Home</a></li>
                        <li class="active"><a href="../pages/produtos-user-view.php">Produtos</a></li>
                        <li><a href="../pages/cart_view.php">Carrinho</a></li>';
                        break;
                    case 'PWS/ProjetoWebServidor/pages/cart_view.php':
                        echo '<li><a href="../pages/index.php">Home</a></li>
                            <li class="active"><a href="../pages/produtos-user-view.php">Produtos</a></li>
                            <li><a href="../pages/produtos-user-view.php">Produtos</a></li>';
                        break;
                    default :
                        echo '<li><a href="../pages/index.php">Home</a></li>
                            <li><a href="../pages/produtos-user-view.php">Produtos</a></li>
                            <li class="active"><a href="../pages/cart_view.php">Carrinho</a></li>';
                    }
                ?>
            </ul>
            <ul id="nav-mobile" class="right hide-on-small-and-down ">
                <li class="paddingLR-10px">
                    <div class="black-text margin-10px">
                        <?php
                        $timeremain = $_SESSION['LogginTime'] - time();
                        echo 'Tempo restante: ' . $timeremain . ' segundos';
                        ?>
                    </div>
                </li>
                <li>
                    <form method="POST" action="templates/LogOut.php">
                        <button class="btn brand z-depth-10">Log out</button>
                    </form>
                </li>
            </ul>
            <a href="#" class="brand-logo center brand-text hide-on-small-and-down">UwU</a>
        </div>
    </nav>
   
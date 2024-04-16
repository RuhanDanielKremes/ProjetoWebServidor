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
    .fixedImage{
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
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
        <ul id="nav-mobile" class="right hide-on-small-and-down ">
            <li class="paddingLR-10px">
                <div class="black-text margin-10px">
                    <?php
                    session_start();
                    if(isset($_SESSION['LogginTime'])){
                        $timeremain = $_SESSION['LogginTime'] - time();
                        if($timeremain >= 3600){
                            echo 'Tempo restante: ' . floor($timeremain/3600) . ' hora(s)';
                        }elseif($timeremain >=60){
                            echo 'Tempo restante: ' . floor($timeremain/60) . ' minuto(s)';
                        }else{
                            echo 'Tempo restante: ' . $timeremain . ' segundo(s)';
                        }
                    }
                        ?>
                </div>
            </li>
            <li>
                <?php 
                    include "breadcrumbs.php";
                    $dirLogOut = $breadcrumbs."src/controller/LogOut.php";
                    $dirIndex = $breadcrumbs."src/index.php";
                    echo "<a href=\"$dirIndex\" class='btn brand z-depth-10'><i class=\"material-icons left\">exit_to_app</i>Log out</a>"
                ?>
            </li>
        </ul>
        <a href="#" class="brand-logo center brand-text hide-on-small-and-down">UwU</a>
    </div>
</nav>
<?php
    include "breadcrumbs.php";
    $dirIndex = $breadcrumbs."src/index.php";
    $dirAccessDenied = $breadcrumbs."public/images/AccessDenied.png";
    echo "<div class=\"container\"><h1>Você não tem permissão para acessar essa página</h1><a href=\"$dirIndex\" class=\"btn right\">Volte para página inicial</a></div>";
    echo "<img class=\"materialboxed fixedImage\" width=\"200\" src=\"$dirAccessDenied\"><br>";
//    $dirFooter = $breadcrumbsfunction("public/footer.php");
    include "footer.php";
?>

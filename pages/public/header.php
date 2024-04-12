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
</head>
<body class="grey lighten-4">
    <nav class="white z-depth-0">
        <div class="container">
            <a href="#" class="brand-logo brand-text">UwU</a>
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <li>
                    <div class="black-text border">
                        <?php
                        $timeremain = $_SESSION['LogginTime'] - time();
                        echo 'Tempo restante: ' . $timeremain . ' segundos';
                        ?>
                    <div>
                </li>
                <li><span>....</span></li>
                <li>
                    <form method="POST" action="templates/LogOut.php">
                        <button class="btn brand z-depth-10">Log out</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
   